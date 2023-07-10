<?php

use App\Models\Persona;
use App\Models\Scopes\CondominioScope;
use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
})->skip(function () {
    return ! Features::enabled(Features::registration());
}, 'Registration support is not enabled.');

test('registration screen cannot be rendered if support is disabled', function () {
    $response = $this->get('/register');

    $response->assertStatus(404);
})->skip(function () {
    return Features::enabled(Features::registration());
}, 'Registration support is enabled.');

test('new users can register if tel in personas table', function () {
    $persona = Persona::withoutGlobalScope(CondominioScope::class)
        ->find(fake()->numberBetween(1, 30));

    $response = $this->post('/register', [
        'name' => 'Test User',
        'tel' => $persona->tel_celular,
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
    ]);

    $this->assertAuthenticated();

    expect(auth()->user()->condominios)->toHaveCount(1);

    $response->assertRedirect(RouteServiceProvider::HOME);
})->skip(function () {
    return ! Features::enabled(Features::registration());
}, 'Registration support is not enabled.');
