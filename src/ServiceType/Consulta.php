<?php

namespace ConectaMedico\Crm\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Consulta ServiceType
 * @subpackage Services
 */
class Consulta extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ConsultaCompleta
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ConectaMedico\Crm\StructType\ConsultaCompleta $parameters
     * @return \ConectaMedico\Crm\StructType\ConsultaCompletaResponse|bool
     */
    public function ConsultaCompleta(\ConectaMedico\Crm\StructType\ConsultaCompleta $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ConsultaCompleta($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ConectaMedico\Crm\StructType\ConsultaCompletaResponse
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
