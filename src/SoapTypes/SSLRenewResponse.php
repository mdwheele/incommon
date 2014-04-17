<?php

namespace InCommon\SoapTypes;

/**
 * A custom type representing the SSLRenewResponse from the collectRenewed
 * operation.
 *
 * WSDL Definition:
 * <xs:complexType name="SSLRenewResponse">
 *   <xs:sequence>
 *     <xs:element name="data" type="xs:base64Binary" minOccurs="0"/>
 *     <xs:element name="errorCode" type="xs:int"/>
 *   </xs:sequence>
 * </xs:complexType>
 *
 * @see Section 2.2.2 of API documentation.
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class SSLRenewResponse
{
    const ISSUED_OK = 0;
    const APPLIED = -1;
    const CERT_INVALID_STATE = -2;
    const INTERNAL_ERROR = -3;
    const SSL_CERT_NOT_FOUND = -4;
    const WAITING_FOR_APPROVAL = -5;
    const DECLINED = -6;

    /**
     * @var array
     */
    private $errorMessages = array(
        SSLRenewResponse::ISSUED_OK => 'The certificate is ready for download.',
        SSLRenewResponse::APPLIED => 'Your request has been approved and is being processed by InCommon.',
        SSLRenewResponse::CERT_INVALID_STATE => 'Something is messed up with the certificate. Helpful, I know.',
        SSLRenewResponse::INTERNAL_ERROR => 'There was an internal error with the service.',
        SSLRenewResponse::SSL_CERT_NOT_FOUND => 'The certificate was not found.',
        SSLRenewResponse::WAITING_FOR_APPROVAL => 'Your request is awaiting approval by your organization\'s administrator.',
        SSLRenewResponse::DECLINED => 'Your request has been declined by your organization\'s administrator.'
    );

    /**
     * @var
     */
    private $data;

    /**
     * @var
     */
    private $errorCode;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->errorMessages[$this->errorCode];
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

}
