<?php

namespace Tests;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, withFaker;

    /**
     * @param $user
     * @return Collection|\Illuminate\Database\Eloquent\Factories\HasFactory|\Illuminate\Database\Eloquent\Model|mixed
     */
    public function login($user = null):mixed
    {
        $user = $user ?? User::factory()->create();

        $this->actingAs($user);

        return $user;
    }
}
