<?php

namespace App\Services\Youtube\Packages;

use App\Services\Youtube\PackageContract;

class AlaouyPackage implements PackageContract
{
    /**
     * Config
     *
     * @var array
     */
    protected $config = [];

    /**
     * New Maildev transport
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
        $this->youtube = app('youtube');

    }

    public function getVideoInfo($id)
    {
        dd($this->youtube);

       return $this->youtube->getVideoInfo($id);
    }
}
