<?php

namespace InCommon\Types;

/**
 * Class representing the customerCertTypeResponse from SOAP service.
 *
 * WSDL:
 * <xs:complexType name="customerCertTypeResponse">
 *   <xs:complexContent>
 *     <xs:extension base="tns:abstractResponse">
 *       <xs:sequence>
 *         <xs:element name="types" type="tns:customerCertType" minOccurs="0" maxOccurs="unbounded"/>
 *       </xs:sequence>
 *     </xs:extension>
 *   </xs:complexContent>
 * </xs:complexType>
 *
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class CustomerCertTypeResponse extends AbstractResponse
{
    const SUCCESSFUL = 0;
    const UNKNOWN_ERROR_OCCURED = -14;
    const PERMISSION_DENIED = -16;

    /**
     * @var CustomerCertType[]
     */
    private $types;

    /**
     * @return CustomerCertType[]
     */
    public function getTypes()
    {
        return $this->types;
    }
} 