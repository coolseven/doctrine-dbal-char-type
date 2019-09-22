<?php


namespace Coolseven\DoctrineDbalCharType;


use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider as LaravelServiceProviderAlias;

class LaravelMigrationCharTypeServiceProvider extends LaravelServiceProviderAlias implements DeferrableProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        Schema::registerCustomDoctrineType(CharType::class,'char','char');
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['coolseven.laravel_migration_char_type'];
    }
}