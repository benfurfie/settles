<?php

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a user has a date of birth', function () {
    $user = User::factory()->create();
    $dob = '1985-03-12';

    UserProfile::factory([
        'user_id' => $user->id,
        'date_of_birth' => $dob,
    ])->create();

    $this->assertDatabaseHas('user_profiles', [
        'date_of_birth' => $dob,
    ]);
});

test('a user has phone number', function () {
    $user = User::factory()->create();
    $phone_number = '07555 555 555';

    UserProfile::factory([
        'user_id' => $user->id,
        'phone_number' => $phone_number,
    ])->create();

    $this->assertDatabaseHas('user_profiles', [
        'phone_number' => $phone_number,
    ]);
});
