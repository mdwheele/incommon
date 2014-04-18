<?php

namespace InCommon\SoapTypes;

class getCustomerCertTypes
{

  /**
   * 
   * @var authData $authData
   * @access public
   */
  public $authData = null;

  /**
   * 
   * @param authData $authData
   * @access public
   */
  public function __construct($authData)
  {
    $this->authData = $authData;
  }

}
