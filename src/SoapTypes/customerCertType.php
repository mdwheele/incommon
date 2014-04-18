<?php

namespace InCommon\SoapTypes;

class customerCertType
{

  /**
   * 
   * @var int $id
   * @access public
   */
  public $id = null;

  /**
   * 
   * @var string $name
   * @access public
   */
  public $name = null;

  /**
   * 
   * @var int[] $terms
   * @access public
   */
  public $terms = null;

  /**
   * 
   * @param int $id
   * @param string $name
   * @param int[] $terms
   * @access public
   */
  public function __construct($id, $name, $terms)
  {
    $this->id = $id;
    $this->name = $name;
    $this->terms = $terms;
  }

}
