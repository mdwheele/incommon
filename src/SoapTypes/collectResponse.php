<?php

namespace InCommon\SoapTypes;

class collectResponse
{

  /**
   * 
   * @var SSLCollectResponse $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param SSLCollectResponse $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
