<?php

namespace InCommon\SoapTypes;

class customerCertTypeResponse
{

  /**
   * 
   * @var customerCertType[] $types
   * @access public
   */
  public $types = null;

  /**
   * 
   * @param customerCertType[] $types
   * @access public
   */
  public function __construct($types)
  {
    $this->types = $types;
  }

    public function getTypes()
    {
        return $this->types;
    }

}
