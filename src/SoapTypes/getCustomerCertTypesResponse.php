<?php

namespace InCommon\SoapTypes;

class getCustomerCertTypesResponse
{

  /**
   * 
   * @var customerCertTypeResponse $return
   * @access public
   */
  public $return = null;

  /**
   * 
   * @param customerCertTypeResponse $return
   * @access public
   */
  public function __construct($return)
  {
    $this->return = $return;
  }

}
