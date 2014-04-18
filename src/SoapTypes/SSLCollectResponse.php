<?php

namespace InCommon\SoapTypes;

class SSLCollectResponse
{

  /**
   * 
   * @var SSL $SSL
   * @access public
   */
  public $SSL = null;

  /**
   * 
   * @param SSL $SSL
   * @access public
   */
  public function __construct($SSL)
  {
    $this->SSL = $SSL;
  }

}
