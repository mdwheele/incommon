<?php

namespace InCommon\SoapTypes;

class collectRenewedResponse
{

  /**
   * 
   * @var SSLRenewResponse $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param SSLRenewResponse $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
