<?php

namespace Owaslo\VoyagerBread;

use Riak\Connection;
use Illuminate\Support\ServiceProvider;
use Owaslo\VoyagerBread\Commands\BreadGenerator;

class BreadGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(BreadGenerator::class);
    }
}
