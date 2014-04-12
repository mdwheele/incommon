<?php

namespace InCommon;


/**
 * @property Api\Certs $certs
 */
class InCommon 
{
    /**
     * @var Client
     */
    protected $client;
    /**
     * @var array
     */
    protected $apis = array();

    /**
     * Create a new Client.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param $name
     *
     * @return mixed
     * @throws \UnexpectedValueException
     */
    public function __get($name)
    {
        $allowed = array('certs');

        if (in_array($name, $allowed)) {
            return $this->{$name}();
        }

        throw new \UnexpectedValueException(sprintf("Property does not exist: %s", $name));
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return Certs
     */
    public function certs()
    {
        return $this->getApi('Certs');
    }

    /**
     * @param $class
     *
     * @return AbstractApi
     * @throws InCommonException
     */
    protected function getApi($class)
    {
        $class = "\\" . __NAMESPACE__ . "\\Api\\" . $class;

        if( ! class_exists($class)) {
            throw new InCommonException(sprintf('Class %s does not exist.', $class));
        }

        if( ! array_key_exists($class, $this->apis)) {
            $this->apis[$class] = new $class($this->client);
        }

        return $this->apis[$class];
    }
} 