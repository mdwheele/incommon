<?php

namespace InCommon;


class ClassMapper 
{
    public function toArray()
    {
        return array(
            'authData' => '\InCommon\Types\AuthData',
            'customerCertType' => '\InCommon\Types\CustomerCertType',
            'enrollWithDCVResponse' => '\enrollWithDCVResponse',
            'customerCertTypeResponse' => '\InCommon\Types\CustomerCertTypeResponse',
            'abstractResponse' => '\InCommon\Types\AbstractResponse',
            'SSLRenewResponse' => '\InCommon\Types\SSLRenewResponse',
            'SSLCollectResponse' => '\InCommon\Types\SSLCollectResponse',
            'SSL' => '\InCommon\Types\SSL'
        );
    }
} 