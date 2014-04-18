<?php

namespace InCommon\SoapTypes;

class SSL
{

  /**
   * 
   * @var string $certificate
   * @access public
   */
  public $certificate = null;

  /**
   * 
   * @var string $renewID
   * @access public
   */
  public $renewID = null;

  /**
   * 
   * @param string $certificate
   * @param string $renewID
   * @access public
   */
  public function __construct($certificate, $renewID)
  {
    $this->certificate = $certificate;
    $this->renewID = $renewID;
  }

}
