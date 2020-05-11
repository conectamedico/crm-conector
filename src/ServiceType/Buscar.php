<?php

namespace ConectaMedico\Crm\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Buscar ServiceType
 * @subpackage Services
 */
class Buscar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named buscarImagem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ConectaMedico\Crm\StructType\BuscarImagem $parameters
     * @return \ConectaMedico\Crm\StructType\BuscarImagemResponse|bool
     */
    public function buscarImagem(\ConectaMedico\Crm\StructType\BuscarImagem $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->buscarImagem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ConectaMedico\Crm\StructType\BuscarImagemResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
