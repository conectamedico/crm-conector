<?php

namespace ConectaMedico\Crm\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validar ServiceType
 * @subpackage Services
 */
class Validar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Validar
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ConectaMedico\Crm\StructType\Validar $parameters
     * @return \ConectaMedico\Crm\StructType\ValidarResponse|bool
     */
    public function Validar(\ConectaMedico\Crm\StructType\Validar $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Validar($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ConectaMedico\Crm\StructType\ValidarResponse
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
