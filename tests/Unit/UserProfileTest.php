<?php

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a user must have a date of birth', function () {
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

test('a user has a profile image', function () {
    $user = User::factory()->create();
    $profile_image = 'https://pbs.twimg.com/profile_images/1196645005378478080/79mVokZP_400x400.jpg';

    UserProfile::factory([
        'user_id' => $user->id,
        'image' => $profile_image,
    ])->create();

    $this->assertDatabaseHas('user_profiles', [
        'image' => $profile_image,
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

test('a user has a gender', function () {
    $user = User::factory()->create();
    $gender = 'male';

    UserProfile::factory([
        'user_id' => $user->id,
        'gender' => $gender,
    ])->create();

    $this->assertDatabaseHas('user_profiles', [
        'gender' => $gender,
    ]);
});

test('a user has a full address', function () {
    $user = User::factory()->create();
    $address_name_number = 'Door 368';
    $address_street_1 = 'Nelson Mandela House';
    $address_street_2 = 'Dockside Estate, Peckham';
    $address_city = 'London';
    $address_county = 'Greater London';
    $address_country = 'United Kingdom';
    $address_postcode = 'W5 1RH';

    UserProfile::factory([
        'user_id' => $user->id,
        'address_name_number' => $address_name_number,
        'address_street_1' => $address_street_1,
        'address_street_2' => $address_street_2,
        'address_city' => $address_city,
        'address_county' => $address_county,
        'address_country' => $address_country,
        'address_postcode' => $address_postcode,
    ])->create();

    $this->assertDatabaseHas('user_profiles', [
        'address_name_number' => $address_name_number,
        'address_street_1' => $address_street_1,
        'address_street_2' => $address_street_2,
        'address_city' => $address_city,
        'address_county' => $address_county,
        'address_country' => $address_country,
        'address_postcode' => $address_postcode,
    ]);
});
