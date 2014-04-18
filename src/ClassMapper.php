<?php

namespace InCommon;

class ClassMapper
{
    public function toArray()
    {
        return array(

            'revoke' => '\InCommon\SoapTypes\revoke',
            'authData' => '\InCommon\SoapTypes\authData',
            'revokeResponse' => '\InCommon\SoapTypes\revokeResponse',
            'getCollectStatus' => '\InCommon\SoapTypes\getCollectStatus',
            'getCollectStatusResponse' => '\InCommon\SoapTypes\getCollectStatusResponse',
            'getWebServiceInfo' => '\InCommon\SoapTypes\getWebServiceInfo',
            'getWebServiceInfoResponse' => '\InCommon\SoapTypes\getWebServiceInfoResponse',
            'enrollWithDCV' => '\InCommon\SoapTypes\enrollWithDCV',
            'customerCertType' => '\InCommon\SoapTypes\customerCertType',
            'enrollWithDCVResponse' => '\InCommon\SoapTypes\enrollWithDCVResponse',
            'getCustomerCertTypes' => '\InCommon\SoapTypes\getCustomerCertTypes',
            'getCustomerCertTypesResponse' => '\InCommon\SoapTypes\getCustomerCertTypesResponse',
            'customerCertTypeResponse' => '\InCommon\SoapTypes\customerCertTypeResponse',
            'abstractResponse' => '\InCommon\SoapTypes\abstractResponse',
            'renew' => '\InCommon\SoapTypes\renew',
            'renewResponse' => '\InCommon\SoapTypes\renewResponse',
            'getCustomerCertTypesByOrg' => '\InCommon\SoapTypes\getCustomerCertTypesByOrg',
            'getCustomerCertTypesByOrgResponse' => '\InCommon\SoapTypes\getCustomerCertTypesByOrgResponse',
            'collectRenewed' => '\InCommon\SoapTypes\collectRenewed',
            'collectRenewedResponse' => '\InCommon\SoapTypes\collectRenewedResponse',
            'SSLRenewResponse' => '\InCommon\SoapTypes\SSLRenewResponse',
            'enroll' => '\InCommon\SoapTypes\enroll',
            'enrollResponse' => '\InCommon\SoapTypes\enrollResponse',
            'collect' => '\InCommon\SoapTypes\collect',
            'collectResponse' => '\InCommon\SoapTypes\collectResponse',
            'SSLCollectResponse' => '\InCommon\SoapTypes\SSLCollectResponse',
            'SSL' => '\InCommon\SoapTypes\SSL'
        );
    }
}
