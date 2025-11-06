<?php

use App\Http\Integrations\Requests\TodoRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can update failover rate limit ', function () {
    $connector = new \App\Http\Integrations\FailoverConnector();

    $connector->send(new TodoRequest());
    $connector->send(new TodoRequest());
});

it('can update mysql database rate limit ', function () {
    $connector = new \App\Http\Integrations\DatabaseConnector();

    $connector->send(new TodoRequest());
    $connector->send(new TodoRequest());
});
