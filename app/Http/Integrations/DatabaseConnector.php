<?php
namespace App\Http\Integrations;

use Saloon\Http\Connector;

class DatabaseConnector extends Connector
{
    use \Saloon\RateLimitPlugin\Traits\HasRateLimits;

    public function resolveBaseUrl(): string
    {
        return 'https://jsonplaceholder.typicode.com/';
    }

    protected function resolveLimits(): array
    {
        return [
            \Saloon\RateLimitPlugin\Limit::allow(100)->everyMinute(),
        ];
    }

    protected function resolveRateLimitStore(): \Saloon\RateLimitPlugin\Contracts\RateLimitStore
    {
        return new \Saloon\RateLimitPlugin\Stores\LaravelCacheStore(cache()->driver('database'));
    }
}
