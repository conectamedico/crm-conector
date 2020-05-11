<?php

namespace ConectaMedico\Crm;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Consultar' => '\\ConectaMedico\\Crm\\StructType\\Consultar',
            'ConsultarResponse' => '\\ConectaMedico\\Crm\\StructType\\ConsultarResponse',
            'medicoVO' => '\\ConectaMedico\\Crm\\StructType\\MedicoVO',
            'Validar' => '\\ConectaMedico\\Crm\\StructType\\Validar',
            'ValidarResponse' => '\\ConectaMedico\\Crm\\StructType\\ValidarResponse',
            'ConsultaCompleta' => '\\ConectaMedico\\Crm\\StructType\\ConsultaCompleta',
            'ConsultaCompletaResponse' => '\\ConectaMedico\\Crm\\StructType\\ConsultaCompletaResponse',
            'buscarImagem' => '\\ConectaMedico\\Crm\\StructType\\BuscarImagem',
            'buscarImagemResponse' => '\\ConectaMedico\\Crm\\StructType\\BuscarImagemResponse',
            'Exception' => '\\ConectaMedico\\Crm\\StructType\\Exception',
        );
    }
}
