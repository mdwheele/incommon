<?php

namespace InCommon;

class ClassMapper
{
    public function toArray()
    {
        return array(
            'authData' => '\InCommon\SoapTypes\AuthData',
            'customerCertType' => '\InCommon\SoapTypes\CustomerCertType',
            'customerCertTypeResponse' => '\InCommon\SoapTypes\CustomerCertTypeResponse',
            'abstractResponse' => '\InCommon\SoapTypes\AbstractResponse',
            'SSLRenewResponse' => '\InCommon\SoapTypes\SSLRenewResponse',
            'SSLCollectResponse' => '\InCommon\SoapTypes\SSLCollectResponse',
            'SSL' => '\InCommon\SoapTypes\SSL'
        );
    }
}
