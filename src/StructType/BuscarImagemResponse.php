<?php

namespace ConectaMedico\Crm\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for buscarImagemResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:buscarImagemResponse
 * @subpackage Structs
 */
class BuscarImagemResponse extends AbstractStructBase
{
    /**
     * The resultadoImagem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ConectaMedico\Crm\StructType\MedicoVO
     */
    public $resultadoImagem;
    /**
     * Constructor method for buscarImagemResponse
     * @uses BuscarImagemResponse::setResultadoImagem()
     * @param \ConectaMedico\Crm\StructType\MedicoVO $resultadoImagem
     */
    public function __construct(\ConectaMedico\Crm\StructType\MedicoVO $resultadoImagem = null)
    {
        $this
            ->setResultadoImagem($resultadoImagem);
    }
    /**
     * Get resultadoImagem value
     * @return \ConectaMedico\Crm\StructType\MedicoVO|null
     */
    public function getResultadoImagem()
    {
        return $this->resultadoImagem;
    }
    /**
     * Set resultadoImagem value
     * @param \ConectaMedico\Crm\StructType\MedicoVO $resultadoImagem
     * @return \ConectaMedico\Crm\StructType\BuscarImagemResponse
     */
    public function setResultadoImagem(\ConectaMedico\Crm\StructType\MedicoVO $resultadoImagem = null)
    {
        $this->resultadoImagem = $resultadoImagem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ConectaMedico\Crm\StructType\BuscarImagemResponse
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
