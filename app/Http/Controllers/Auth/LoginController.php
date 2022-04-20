<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function handleSocialRedirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function handleSocialCallback($social)
    {
        try {
            $user = Socialite::driver($social)->stateless()->user();
            $dataCreate['name'] =  $user->getName();
            $dataCreate['email'] =  $user->getEmail();
            $dataCreate['password'] = config('user.password_default');
            $userCreate = $this->create($dataCreate);
            $this->createTeam($userCreate);

            return redirect()->intended();

        }catch (\Exception $exception)
        {

        }
    }

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
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
     * @param  \App\Models\User  $user
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
}
