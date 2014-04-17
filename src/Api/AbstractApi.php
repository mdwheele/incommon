<?php

namespace InCommon\Api;

abstract class AbstractApi
{
    protected $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
