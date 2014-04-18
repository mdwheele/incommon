<?php

namespace InCommon\SoapTypes;

class getCustomerCertTypesByOrg
{

  /**
   * 
   * @var authData $authData
   * @access public
   */
  public $authData = null;

  /**
   * 
   * @var int $orgId
   * @access public
   */
  public $orgId = null;

  /**
   * 
   * @param authData $authData
   * @param int $orgId
   * @access public
   */
  public function __construct($authData, $orgId)
  {
    $this->authData = $authData;
    $this->orgId = $orgId;
  }

}
