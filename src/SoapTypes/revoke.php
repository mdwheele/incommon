<?php

namespace InCommon\SoapTypes;

class revoke
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
   * @var string $reason
   * @access public
   */
  public $reason = null;

  /**
   * 
   * @param authData $authData
   * @param int $id
   * @param string $reason
   * @access public
   */
  public function __construct($authData, $id, $reason)
  {
    $this->authData = $authData;
    $this->id = $id;
    $this->reason = $reason;
  }

}
