<?php

namespace InCommon\Api;

use InCommon\SoapTypes\collect;
use InCommon\SoapTypes\getCollectStatus;
use InCommon\SoapTypes\enroll;
use InCommon\SoapTypes\getCustomerCertTypes;
use InCommon\SoapTypes\authData as AuthData;

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
    public function getCustomerCertTypes(AuthData $authData)
    {
        $response = $this->client->getCustomerCertTypes(new getCustomerCertTypes($authData));

        return $response->return;
    }

    public function enroll(
        $authData,
        $orgId,
        $secretKey,
        $csrData,
        $phrase,
        $subjAltNames,
        $certType,
        $numberServers,
        $serverType,
        $term,
        $comments
    )
    {
        $response = $this->client->enroll(new enroll(
            $authData,
            $orgId,
            $secretKey,
            $csrData,
            $phrase,
            $subjAltNames,
            $certType,
            $numberServers,
            $serverType,
            $term,
            $comments)
        );

        return $response->return;
    }

    public function checkStatus($authData, $sslId)
    {
        $response = $this->client->getCollectStatus(new getCollectStatus($authData, $sslId));

        return $response->return;
    }

    public function collect($authData, $sslId, $formatType)
    {
        $response = $this->client->collect(new collect($authData, $sslId, $formatType));

        return $response->return;
    }
}
