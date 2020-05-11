<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.cfm.org.br:8080/WebServiceConsultaMedicos/ServicoConsultaMedicos?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.cfm.org.br:8080/WebServiceConsultaMedicos/ServicoConsultaMedicos?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ConectaMedico\Crm\ClassMap::get(),
);
/**
 * Samples for Consultar ServiceType
 */
$consultar = new \ConectaMedico\Crm\ServiceType\Consultar($options);
/**
 * Sample call for Consultar operation/method
 */
if ($consultar->Consultar(new \ConectaMedico\Crm\StructType\Consultar()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Samples for Validar ServiceType
 */
$validar = new \ConectaMedico\Crm\ServiceType\Validar($options);
/**
 * Sample call for Validar operation/method
 */
if ($validar->Validar(new \ConectaMedico\Crm\StructType\Validar()) !== false) {
    print_r($validar->getResult());
} else {
    print_r($validar->getLastError());
}
/**
 * Samples for Consulta ServiceType
 */
$consulta = new \ConectaMedico\Crm\ServiceType\Consulta($options);
/**
 * Sample call for ConsultaCompleta operation/method
 */
if ($consulta->ConsultaCompleta(new \ConectaMedico\Crm\StructType\ConsultaCompleta()) !== false) {
    print_r($consulta->getResult());
} else {
    print_r($consulta->getLastError());
}
/**
 * Samples for Buscar ServiceType
 */
$buscar = new \ConectaMedico\Crm\ServiceType\Buscar($options);
/**
 * Sample call for buscarImagem operation/method
 */
if ($buscar->buscarImagem(new \ConectaMedico\Crm\StructType\BuscarImagem()) !== false) {
    print_r($buscar->getResult());
} else {
    print_r($buscar->getLastError());
}
