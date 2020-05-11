<?php

namespace ConectaMedico\Crm\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaCompleta StructType
 * Meta information extracted from the WSDL
 * - type: tns:ConsultaCompleta
 * @subpackage Structs
 */
class ConsultaCompleta extends AbstractStructBase
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
     * The cpf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cpf;
    /**
     * The dataNascimento
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dataNascimento;
    /**
     * The chave
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $chave;
    /**
     * Constructor method for ConsultaCompleta
     * @uses ConsultaCompleta::setCrm()
     * @uses ConsultaCompleta::setUf()
     * @uses ConsultaCompleta::setCpf()
     * @uses ConsultaCompleta::setDataNascimento()
     * @uses ConsultaCompleta::setChave()
     * @param int $crm
     * @param string $uf
     * @param string $cpf
     * @param string $dataNascimento
     * @param string $chave
     */
    public function __construct($crm = null, $uf = null, $cpf = null, $dataNascimento = null, $chave = null)
    {
        $this
            ->setCrm($crm)
            ->setUf($uf)
            ->setCpf($cpf)
            ->setDataNascimento($dataNascimento)
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
     * @return \ConectaMedico\Crm\StructType\ConsultaCompleta
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
     * @return \ConectaMedico\Crm\StructType\ConsultaCompleta
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
     * Get cpf value
     * @return string|null
     */
    public function getCpf()
    {
        return $this->cpf;
    }
    /**
     * Set cpf value
     * @param string $cpf
     * @return \ConectaMedico\Crm\StructType\ConsultaCompleta
     */
    public function setCpf($cpf = null)
    {
        // validation for constraint: string
        if (!is_null($cpf) && !is_string($cpf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpf, true), gettype($cpf)), __LINE__);
        }
        $this->cpf = $cpf;
        return $this;
    }
    /**
     * Get dataNascimento value
     * @return string|null
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    /**
     * Set dataNascimento value
     * @param string $dataNascimento
     * @return \ConectaMedico\Crm\StructType\ConsultaCompleta
     */
    public function setDataNascimento($dataNascimento = null)
    {
        // validation for constraint: string
        if (!is_null($dataNascimento) && !is_string($dataNascimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNascimento, true), gettype($dataNascimento)), __LINE__);
        }
        $this->dataNascimento = $dataNascimento;
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
     * @return \ConectaMedico\Crm\StructType\ConsultaCompleta
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
     * @return \ConectaMedico\Crm\StructType\ConsultaCompleta
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
