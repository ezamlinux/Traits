<?php

namespace Ezamux\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

class BlueprintServiceProvider extends ServiceProvider
{
    /**
     * Extends Blueprint Method
     *
     * @return void
     */
    public function register()
    {
        /**
         * ADD NEW COLUMN
         */

        Blueprint::macro('creator', function () {
            $this->integer('created_by')->nullable();
            $this->index('created_by');
        });

        Blueprint::macro('updator', function () {
            $this->integer('updated_by')->nullable();
            $this->index('updated_by');
        });

        Blueprint::macro('deletor', function () {
            $this->integer('deleted_by')->nullable();
            $this->index('deleted_by');
        });

        Blueprint::macro('determinator', function (bool $deletor = true) {
            $this->creator();
            $this->updator();

            if ($deletor) {
                $this->deletor();
            }
        });

        /**
         * DROP METHOD
         */

        Blueprint::macro('dropCreator', function () {
            $this->dropColumn('created_by');
        });

        Blueprint::macro('dropUpdator', function () {
            $this->dropColumn('updated_by');
        });

        Blueprint::macro('dropDeletor', function () {
            $this->dropColumn('deleted_by');
        });

        Blueprint::macro('dropDeterminator', function (bool $deletor = true) {
            $this->dropCreator();
            $this->dropUpdator();

            if ($deletor) {
                $this->dropDeletor();
            }
        });

        /**
         * BASE Method
         */

        Blueprint::macro('base', function () {
            // created_at, updated_at
            $this->timestamps();

            // deleted_at
            $this->softDeletes();

            // created_by, updated_by, deleted_by
            $this->determinator();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
