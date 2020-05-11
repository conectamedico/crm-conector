<?php

namespace ConectaMedico\Crm\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for buscarImagem StructType
 * Meta information extracted from the WSDL
 * - type: tns:buscarImagem
 * @subpackage Structs
 */
class BuscarImagem extends AbstractStructBase
{
    /**
     * The cpf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cpf;
    /**
     * The chave
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $chave;
    /**
     * Constructor method for buscarImagem
     * @uses BuscarImagem::setCpf()
     * @uses BuscarImagem::setChave()
     * @param string $cpf
     * @param string $chave
     */
    public function __construct($cpf = null, $chave = null)
    {
        $this
            ->setCpf($cpf)
            ->setChave($chave);
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
     * @return \ConectaMedico\Crm\StructType\BuscarImagem
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
     * @return \ConectaMedico\Crm\StructType\BuscarImagem
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
     * @return \ConectaMedico\Crm\StructType\BuscarImagem
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
