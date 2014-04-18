<?php

namespace InCommon\SoapTypes;

class collect
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
   * @var int $formatType
   * @access public
   */
  public $formatType = null;

  /**
   * 
   * @param authData $authData
   * @param int $id
   * @param int $formatType
   * @access public
   */
  public function __construct($authData, $id, $formatType)
  {
    $this->authData = $authData;
    $this->id = $id;
    $this->formatType = $formatType;
  }

}
