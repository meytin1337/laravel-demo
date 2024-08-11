<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

uses(RefreshDatabase::class);

test('It should create a shop', function () {
    $user = User::factory()->create();
    $this->actingAs($user)->json('POST', '/shop/create', [
        'name' => 'test',
        'street' => 'test',
        'country' => 'test',
        'city' => 'test',
        'postalCode' => 12345,
    ]);
    $this->assertDatabaseCount('shops', 1);
});
