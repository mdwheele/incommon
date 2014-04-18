<?php

namespace InCommon\SoapTypes;

class enrollResponse
{

  /**
   * 
   * @var int $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param int $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
