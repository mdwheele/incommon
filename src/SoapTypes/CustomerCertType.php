<?php

namespace InCommon\SoapTypes;

/**
 * Class representing a customer certificate type.
 *
 * <xs:complexType name="customerCertType">
 *   <xs:sequence>
 *     <xs:element name="id" type="xs:int"/>
 *     <xs:element name="name" type="xs:string" minOccurs="0"/>
 *     <xs:element name="terms" type="xs:int" minOccurs="0" maxOccurs="unbounded"/>
 *   </xs:sequence>
 * </xs:complexType>
 *
 * @see Section 2.7.2.1 of API Documentation.
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class CustomerCertType
{
    /**
     * The service customer cert type identifier.
     * @var integer
     */
    private $id;

    /**
     * Name of this certificate type. e.g. "Instant SSL"
     * @var string
     */
    private $name;

    /**
     * List of available terms for this customer certificate type.
     * @var integer[]
     */
    private $terms;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getTerms()
    {
        return $this->terms;
    }

}
