<?php

namespace App\Services\Youtube;

class Repository
{
    /**
     * Transporter
     *
     * @var \App\Libraries\Mail\Contracts\TransportContract
     */
    protected $package;

    /**
     * Construct new mail repository
     *
     * @param \App\Libraries\Mail\Contracts\TransportContract $transport
     */
    public function __construct(PackageContract $package)
    {
        $this->package = $package;
    }

    public function getVideoInfo($id)
    {
        return $this->package->getVideoInfo($id);
    }
}
