<?php

namespace ConectaMedico\Crm\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultarResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:ConsultarResponse
 * @subpackage Structs
 */
class ConsultarResponse extends AbstractStructBase
{
    /**
     * The dadosMedico
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ConectaMedico\Crm\StructType\MedicoVO
     */
    public $dadosMedico;
    /**
     * Constructor method for ConsultarResponse
     * @uses ConsultarResponse::setDadosMedico()
     * @param \ConectaMedico\Crm\StructType\MedicoVO $dadosMedico
     */
    public function __construct(\ConectaMedico\Crm\StructType\MedicoVO $dadosMedico = null)
    {
        $this
            ->setDadosMedico($dadosMedico);
    }
    /**
     * Get dadosMedico value
     * @return \ConectaMedico\Crm\StructType\MedicoVO|null
     */
    public function getDadosMedico()
    {
        return $this->dadosMedico;
    }
    /**
     * Set dadosMedico value
     * @param \ConectaMedico\Crm\StructType\MedicoVO $dadosMedico
     * @return \ConectaMedico\Crm\StructType\ConsultarResponse
     */
    public function setDadosMedico(\ConectaMedico\Crm\StructType\MedicoVO $dadosMedico = null)
    {
        $this->dadosMedico = $dadosMedico;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ConectaMedico\Crm\StructType\ConsultarResponse
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
