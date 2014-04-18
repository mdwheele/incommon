<?php

namespace InCommon\SoapTypes;

class SSLRenewResponse
{

  /**
   * 
   * @var base64Binary $data
   * @access public
   */
  public $data = null;

  /**
   * 
   * @var int $errorCode
   * @access public
   */
  public $errorCode = null;

  /**
   * 
   * @param base64Binary $data
   * @param int $errorCode
   * @access public
   */
  public function __construct($data, $errorCode)
  {
    $this->data = $data;
    $this->errorCode = $errorCode;
  }

}
