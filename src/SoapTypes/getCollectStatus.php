<?php

namespace InCommon\SoapTypes;

class getCollectStatus
{

  /**
   * 
   * @var authData $authData
   * @access public
   */
  public $authData = null;

  /**
   * 
   * @var int $id
   * @access public
   */
  public $id = null;

  /**
   * 
   * @param authData $authData
   * @param int $id
   * @access public
   */
  public function __construct($authData, $id)
  {
    $this->authData = $authData;
    $this->id = $id;
  }

}
