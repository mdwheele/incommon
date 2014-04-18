<?php

namespace InCommon\SoapTypes;

class enroll
{

  /**
   * 
   * @var authData $authData
   * @access public
   */
  public $authData = null;

  /**
   * 
   * @var int $orgId
   * @access public
   */
  public $orgId = null;

  /**
   * 
   * @var string $secretKey
   * @access public
   */
  public $secretKey = null;

  /**
   * 
   * @var string $csr
   * @access public
   */
  public $csr = null;

  /**
   * 
   * @var string $phrase
   * @access public
   */
  public $phrase = null;

  /**
   * 
   * @var string $subjAltNames
   * @access public
   */
  public $subjAltNames = null;

  /**
   * 
   * @var customerCertType $certType
   * @access public
   */
  public $certType = null;

  /**
   * 
   * @var int $numberServers
   * @access public
   */
  public $numberServers = null;

  /**
   * 
   * @var int $serverType
   * @access public
   */
  public $serverType = null;

  /**
   * 
   * @var int $term
   * @access public
   */
  public $term = null;

  /**
   * 
   * @var string $comments
   * @access public
   */
  public $comments = null;

  /**
   * 
   * @param authData $authData
   * @param int $orgId
   * @param string $secretKey
   * @param string $csr
   * @param string $phrase
   * @param string $subjAltNames
   * @param customerCertType $certType
   * @param int $numberServers
   * @param int $serverType
   * @param int $term
   * @param string $comments
   * @access public
   */
  public function __construct($authData, $orgId, $secretKey, $csr, $phrase, $subjAltNames, $certType, $numberServers, $serverType, $term, $comments)
  {
    $this->authData = $authData;
    $this->orgId = $orgId;
    $this->secretKey = $secretKey;
    $this->csr = $csr;
    $this->phrase = $phrase;
    $this->subjAltNames = $subjAltNames;
    $this->certType = $certType;
    $this->numberServers = $numberServers;
    $this->serverType = $serverType;
    $this->term = $term;
    $this->comments = $comments;
  }

}
