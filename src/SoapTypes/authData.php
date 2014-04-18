<?php

namespace InCommon\SoapTypes;

class authData
{

  /**
   * 
   * @var string $customerLoginUri
   * @access public
   */
  public $customerLoginUri = null;

  /**
   * 
   * @var string $login
   * @access public
   */
  public $login = null;

  /**
   * 
   * @var string $password
   * @access public
   */
  public $password = null;

  /**
   * 
   * @param string $customerLoginUri
   * @param string $login
   * @param string $password
   * @access public
   */
  public function __construct($customerLoginUri, $login, $password)
  {
    $this->customerLoginUri = $customerLoginUri;
    $this->login = $login;
    $this->password = $password;
  }

}
