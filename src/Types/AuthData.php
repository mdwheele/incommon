<?php

namespace InCommon\Types;

/**
 * A custom type representing the authData type.
 *
 * <xs:complexType name="authData">
 *   <xs:sequence>
 *     <xs:element name="customerLoginUri" type="xs:string" minOccurs="0"/>
 *     <xs:element name="login" type="xs:string" minOccurs="0"/>
 *     <xs:element name="password" type="xs:string" minOccurs="0"/>
 *   </xs:sequence>
 * </xs:complexType>
 *
 * @author Dustin Wheeler <mdwheele@ncsu.edu>
 */
class AuthData 
{
    /**
     * Login name for account within CM.
     *
     * This is the login for the Admin with role 'MRAO Admin', 'RAO SMIME Admin',
     * or 'DRAO SMIME Admin' within CM account.
     *
     * @var string
     */
    private $login;

    /**
     * Set password for account within CM.
     *
     * This is the password for the Admin with role 'MRAO Admin', 'RAO SMIME Admin',
     * or 'DRAO SMIME Admin' within CM account.
     *
     * @var string
     */
    private $password;

    /**
     * URI for logging into account within CM.
     * 
     * @var string
     */
    private $customerLoginUri;

    /**
     * @param mixed $customerLoginUri
     */
    public function setCustomerLoginUri($customerLoginUri)
    {
        $this->customerLoginUri = $customerLoginUri;
    }

    /**
     * @return mixed
     */
    public function getCustomerLoginUri()
    {
        return $this->customerLoginUri;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

} 