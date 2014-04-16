<?php

namespace InCommon\Types;

/**
 * Class representing SOAP service abstractResponse complex type.
 *
 * <xs:complexType name="abstractResponse" abstract="true">
 *   <xs:sequence>
 *     <xs:element name="statusCode" type="xs:int"/>
 *   </xs:sequence>
 * </xs:complexType>
 *
 * @see WSDL Schema.
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
abstract class AbstractResponse
{
    /**
     * @var int
     */
    protected $statusCode;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
} 