<?php

use MangoPay\MangoPayApi;
use Illuminate\Support\ServiceProvider;

class MangoPayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MangoPayApi::class, function ($app) {
            $clientId = config('app.mangopay_client_id');
            $clientPassword = config('app.mangopay_client_password');
            $baseUrl = config('app.mangopay_api_base_url');

            return new MangoPayApi();
        });
    }
}
