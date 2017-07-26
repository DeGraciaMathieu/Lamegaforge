<?php

namespace App\Services\Youtube;

use Illuminate\Support\Manager;

class YoutubeManager extends Manager
{
    /**
     * Create an instance of the Mx mail driver.
     *
     * @return \App\Services\Youtube\Package\AlaouyPackage
     */
    public function createAlaouyDriver()
    {
        $config = $this->app['config']['youtube.package.alaouy'];

        $package = new Packages\AlaouyPackage($config);

        return $this->repository($package);
    }

    /**
     * Create a new Feed repository with the given implementation.
     *
     * @param  \App\Services\Feed\Contracts\TransportContract  $store
     * @return \App\Services\Feed\Repository
     */
    protected function repository(PackageContract $transport)
    {
        return new Repository($transport);
    }

    /**
     * Get the default mail driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->app['config']['youtube.driver'];
    }

    /**
     * Set the default mail driver name.
     *
     * @param  string  $name
     * @return void
     */
    public function setDefaultDriver($name)
    {
        $this->app['config']['youtube.driver'] = $name;
    }
}
