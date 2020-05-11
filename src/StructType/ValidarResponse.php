<?php

namespace ConectaMedico\Crm\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidarResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:ValidarResponse
 * @subpackage Structs
 */
class ValidarResponse extends AbstractStructBase
{
    /**
     * The resultadoConsulta
     * @var bool
     */
    public $resultadoConsulta;
    /**
     * Constructor method for ValidarResponse
     * @uses ValidarResponse::setResultadoConsulta()
     * @param bool $resultadoConsulta
     */
    public function __construct($resultadoConsulta = null)
    {
        $this
            ->setResultadoConsulta($resultadoConsulta);
    }
    /**
     * Get resultadoConsulta value
     * @return bool|null
     */
    public function getResultadoConsulta()
    {
        return $this->resultadoConsulta;
    }
    /**
     * Set resultadoConsulta value
     * @param bool $resultadoConsulta
     * @return \ConectaMedico\Crm\StructType\ValidarResponse
     */
    public function setResultadoConsulta($resultadoConsulta = null)
    {
        // validation for constraint: boolean
        if (!is_null($resultadoConsulta) && !is_bool($resultadoConsulta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resultadoConsulta, true), gettype($resultadoConsulta)), __LINE__);
        }
        $this->resultadoConsulta = $resultadoConsulta;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ConectaMedico\Crm\StructType\ValidarResponse
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
