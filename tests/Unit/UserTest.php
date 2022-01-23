<?php

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a user has a profile', function () {
    $user = User::factory()->create();
    $userProfile = UserProfile::factory([
        'user_id' => $user->id,
    ])->create();

    $this->assertInstanceOf(UserProfile::class, $user->profile);
});
