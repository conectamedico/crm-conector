<?php

namespace ConectaMedico\Crm\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Consultar StructType
 * Meta information extracted from the WSDL
 * - type: tns:Consultar
 * @subpackage Structs
 */
class Consultar extends AbstractStructBase
{
    /**
     * The crm
     * @var int
     */
    public $crm;
    /**
     * The uf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $uf;
    /**
     * The chave
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $chave;
    /**
     * Constructor method for Consultar
     * @uses Consultar::setCrm()
     * @uses Consultar::setUf()
     * @uses Consultar::setChave()
     * @param int $crm
     * @param string $uf
     * @param string $chave
     */
    public function __construct($crm = null, $uf = null, $chave = null)
    {
        $this
            ->setCrm($crm)
            ->setUf($uf)
            ->setChave($chave);
    }
    /**
     * Get crm value
     * @return int|null
     */
    public function getCrm()
    {
        return $this->crm;
    }
    /**
     * Set crm value
     * @param int $crm
     * @return \ConectaMedico\Crm\StructType\Consultar
     */
    public function setCrm($crm = null)
    {
        // validation for constraint: int
        if (!is_null($crm) && !(is_int($crm) || ctype_digit($crm))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crm, true), gettype($crm)), __LINE__);
        }
        $this->crm = $crm;
        return $this;
    }
    /**
     * Get uf value
     * @return string|null
     */
    public function getUf()
    {
        return $this->uf;
    }
    /**
     * Set uf value
     * @param string $uf
     * @return \ConectaMedico\Crm\StructType\Consultar
     */
    public function setUf($uf = null)
    {
        // validation for constraint: string
        if (!is_null($uf) && !is_string($uf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uf, true), gettype($uf)), __LINE__);
        }
        $this->uf = $uf;
        return $this;
    }
    /**
     * Get chave value
     * @return string|null
     */
    public function getChave()
    {
        return $this->chave;
    }
    /**
     * Set chave value
     * @param string $chave
     * @return \ConectaMedico\Crm\StructType\Consultar
     */
    public function setChave($chave = null)
    {
        // validation for constraint: string
        if (!is_null($chave) && !is_string($chave)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chave, true), gettype($chave)), __LINE__);
        }
        $this->chave = $chave;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ConectaMedico\Crm\StructType\Consultar
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
