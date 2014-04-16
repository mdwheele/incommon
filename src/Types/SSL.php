<?php

namespace InCommon\Types;

/**
 * Class representation of SSL complex type.
 *
 * <xs:complexType name="SSL">
 *   <xs:sequence>
 *     <xs:element name="certificate" type="xs:string" minOccurs="0"/>
 *     <xs:element name="renewID" type="xs:string" minOccurs="0"/>
 *   </xs:sequence>
 * </xs:complexType>
 *
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class SSL 
{
    /**
     * The certificate in base64
     * @var string
     */
    private $certificate;

    /**
     * Given by cm when SSL certificate was issued.
     *
     * The code may be used for renewing the certificate.
     *
     * @var string
     */
    private $renewID;

    /**
     * @return mixed
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * @return mixed
     */
    public function getRenewID()
    {
        return $this->renewID;
    }

} 