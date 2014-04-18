<?php

namespace InCommon\SoapTypes;

class renew
{

  /**
   * 
   * @var string $renewId
   * @access public
   */
  public $renewId = null;

  /**
   * 
   * @param string $renewId
   * @access public
   */
  public function __construct($renewId)
  {
    $this->renewId = $renewId;
  }

}
