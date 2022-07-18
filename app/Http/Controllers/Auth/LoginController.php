<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use App\Repositories\Users\UserRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Laravel\Socialite\Facades\Socialite;
use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    protected UserRepository $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handleSocialRedirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function handleSocialCallback($social)
    {
        try {
            $userSocial = Socialite::driver($social)->stateless()->user();
            $user = $this->userRepository->findWithEmail($userSocial->getEmail());
            if (is_null($user)) {
                $user = $this->createUserSocial($userSocial, $social);
            }
            auth()->loginUsingId($user->id);

            return redirect()->intended();
        } catch (\Exception $exception) {
            abort(500, $exception->getMessage());
        }
    }

    /**
     * Create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param \App\Models\User $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

    /**
     * @param $userSocial
     * @param $social
     * @return void
     */
    public function createUserSocial($userSocial, $social): mixed
    {
        $dataCreate['social_id'] = $userSocial->getId();
        $dataCreate['name'] = $userSocial->getName();
        $dataCreate['email'] = $userSocial->getEmail();
        $dataCreate['email_verified_at'] = Carbon::now();
        $dataCreate['password'] = config('user.password_default');
        $userCreate = $this->create($dataCreate);
        $this->createTeam($userCreate);
        $userCreate->addSocial($dataCreate['social_id'], $social);

        return $userCreate;
    }
}
