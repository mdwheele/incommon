<?php

namespace InCommon\SoapTypes;

class getWebServiceInfoResponse
{

  /**
   * 
   * @var string $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param string $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
