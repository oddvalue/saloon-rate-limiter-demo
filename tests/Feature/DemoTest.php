<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can update mysql database rate limit ', function () {
    $connector = new \App\Http\Integrations\DemoConnector();
    $connector->send(new \App\Http\Integrations\Requests\TodoRequest());
    $connector->send(new \App\Http\Integrations\Requests\TodoRequest());
    $connector->send(new \App\Http\Integrations\Requests\TodoRequest());
    $connector->send(new \App\Http\Integrations\Requests\TodoRequest());
    $connector->send(new \App\Http\Integrations\Requests\TodoRequest());
    $connector->send(new \App\Http\Integrations\Requests\TodoRequest());
});
