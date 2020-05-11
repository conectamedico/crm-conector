<?php

namespace ConectaMedico\Crm\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Consultar ServiceType
 * @subpackage Services
 */
class Consultar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Consultar
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ConectaMedico\Crm\StructType\Consultar $parameters
     * @return \ConectaMedico\Crm\StructType\ConsultarResponse|bool
     */
    public function Consultar(\ConectaMedico\Crm\StructType\Consultar $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Consultar($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ConectaMedico\Crm\StructType\ConsultarResponse
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
