<?php

namespace InCommon\SoapTypes;

/**
 * Class representing SSLCollectResponse SOAP complex type.
 *
 * <xs:complexType name="SSLCollectResponse">
 *   <xs:complexContent>
 *     <xs:extension base="tns:abstractResponse">
 *       <xs:sequence>
 *         <xs:element name="SSL" type="tns:SSL" minOccurs="0"/>
 *       </xs:sequence>
 *     </xs:extension>
 *   </xs:complexContent>
 * </xs:complexType>
 *
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class SSLCollectResponse extends AbstractResponse
{
    const CERTIFICATE_AVAILABLE = 1;
    const CERTIFICATES_ATTACHED = 2;
    const BEING_PROCESSED_BY_COMODO = 0;
    const UNKNOWN_ERROR = -14;
    const PERMISSION_DENIED = -16;
    const CERT_REQUEST_REJECTED = -20;
    const CERT_REVOKED = -21;
    const AWAITING_PAYMENT = -22;
    const INVALID_CUSTOMER_AUTH_DATA = -100;
    const INVALID_ORG_AUTH_DATA = -110;
    const DOMAIN_NOT_ALLOWED_FOR_ORG = -111;
    const CONFIG_NOT_ALLOWED_FOR_ACTION = -120;

    /**
     * @var SSL
     */
    private $SSL;

    /**
     * @return SSL
     */
    public function getSSL()
    {
        return $this->SSL;
    }
}
