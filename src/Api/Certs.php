<?php

namespace InCommon\Api;

use InCommon\Types\AuthData;
use InCommon\Types\CustomerCertType;

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
        throw new NotImplementedException();
    }

    public function collectRenewed($renewId, $formatType)
    {
        throw new NotImplementedException();
    }

    public function enroll(
        AuthData $authData,
        $orgId,
        $secretKey,
        $csrData,
        $phrase,
        $subjAltNames,
        CustomerCertType $certType,
        $numberServers,
        $serverType,
        $term,
        $comments
    )
    {
        throw new NotImplementedException();
    }

    public function getCollectStatus(AuthData $authData, $sslId)
    {
        throw new NotImplementedException();
    }

    public function collect(AuthData $authData, $sslId, $formatType)
    {
        throw new NotImplementedException();
    }

    public function revoke(AuthData $authData, $sslId, $reason)
    {
        throw new NotImplementedException();
    }

}
