<?php

namespace InCommon\Api;


use InCommon\Types\AuthData;
use InCommon\Types\CertFormat;

/**
 * Class representing the InCommon CM SSL Web Service API.
 *
 * This class normalizes expectations in request and response formats to be more
 * user-friendly than the underlying SOAP service.
 *
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class Certs extends AbstractApi
{
    public function renew($renewId)
    {

    }

    public function collectRenewed($renewId, CertFormat $formatType)
    {

    }

    public function enroll(
        AuthData $authData,
        $orgId,
        $secretKey,
        $csrData,
        $phrase,
        $subjAltNames
    )
    {
        
    }
} 