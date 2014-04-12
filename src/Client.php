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

    /**
     *
     */
    public function __construct()
    {
        parent::__construct(Client::BASE_URL);
    }
} 