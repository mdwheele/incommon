<?php

namespace InCommon;

class Client extends \SoapClient
{
    /**
     * @var string Base URL of the cert service.
     */
    const BASE_URL = 'https://cert-manager.com/ws/EPKIManagerSSL?wsdl';

    /**
     * @var string Current service version.
     */
    const VERSION = '1.4';

    public function __construct(array $classmap)
    {
        parent::__construct(Client::BASE_URL, array('classmap' => $classmap, 'trace' => true));
    }

    public static function create()
    {
        $classMapper = new ClassMapper();
        $client = new Client($classMapper->toArray());

        return $client;
    }
}
