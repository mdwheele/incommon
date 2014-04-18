<?php

namespace InCommon\SoapTypes;

class collectRenewed
{

  /**
   * 
   * @var string $renewId
   * @access public
   */
  public $renewId = null;

  /**
   * 
   * @var int $formatType
   * @access public
   */
  public $formatType = null;

  /**
   * 
   * @param string $renewId
   * @param int $formatType
   * @access public
   */
  public function __construct($renewId, $formatType)
  {
    $this->renewId = $renewId;
    $this->formatType = $formatType;
  }

}
