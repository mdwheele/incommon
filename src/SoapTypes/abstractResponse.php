<?php

namespace InCommon\SoapTypes;

class abstractResponse
{

  /**
   * 
   * @var int $statusCode
   * @access public
   */
  public $statusCode = null;

  /**
   * 
   * @param int $statusCode
   * @access public
   */
  public function __construct($statusCode)
  {
    $this->statusCode = $statusCode;
  }

}
