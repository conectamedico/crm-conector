<?php

namespace ConectaMedico\Crm\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for medicoVO StructType
 * @subpackage Structs
 */
class MedicoVO extends AbstractStructBase
{
    /**
     * The codigoErro
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codigoErro;
    /**
     * The crm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $crm;
    /**
     * The dataAtualizacao
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dataAtualizacao;
    /**
     * The dataNascimento
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dataNascimento;
    /**
     * The especialidade
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $especialidade;
    /**
     * The imagem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $imagem;
    /**
     * The nome
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nome;
    /**
     * The numeroCPF
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numeroCPF;
    /**
     * The situacao
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $situacao;
    /**
     * The tipoInscricao
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $tipoInscricao;
    /**
     * The uf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $uf;
    /**
     * The verificarAutoriazacao
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $verificarAutoriazacao;
    /**
     * Constructor method for medicoVO
     * @uses MedicoVO::setCodigoErro()
     * @uses MedicoVO::setCrm()
     * @uses MedicoVO::setDataAtualizacao()
     * @uses MedicoVO::setDataNascimento()
     * @uses MedicoVO::setEspecialidade()
     * @uses MedicoVO::setImagem()
     * @uses MedicoVO::setNome()
     * @uses MedicoVO::setNumeroCPF()
     * @uses MedicoVO::setSituacao()
     * @uses MedicoVO::setTipoInscricao()
     * @uses MedicoVO::setUf()
     * @uses MedicoVO::setVerificarAutoriazacao()
     * @param string $codigoErro
     * @param string $crm
     * @param string $dataAtualizacao
     * @param string $dataNascimento
     * @param string[] $especialidade
     * @param string $imagem
     * @param string $nome
     * @param string $numeroCPF
     * @param string $situacao
     * @param string $tipoInscricao
     * @param string $uf
     * @param string $verificarAutoriazacao
     */
    public function __construct($codigoErro = null, $crm = null, $dataAtualizacao = null, $dataNascimento = null, array $especialidade = array(), $imagem = null, $nome = null, $numeroCPF = null, $situacao = null, $tipoInscricao = null, $uf = null, $verificarAutoriazacao = null)
    {
        $this
            ->setCodigoErro($codigoErro)
            ->setCrm($crm)
            ->setDataAtualizacao($dataAtualizacao)
            ->setDataNascimento($dataNascimento)
            ->setEspecialidade($especialidade)
            ->setImagem($imagem)
            ->setNome($nome)
            ->setNumeroCPF($numeroCPF)
            ->setSituacao($situacao)
            ->setTipoInscricao($tipoInscricao)
            ->setUf($uf)
            ->setVerificarAutoriazacao($verificarAutoriazacao);
    }
    /**
     * Get codigoErro value
     * @return string|null
     */
    public function getCodigoErro()
    {
        return $this->codigoErro;
    }
    /**
     * Set codigoErro value
     * @param string $codigoErro
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setCodigoErro($codigoErro = null)
    {
        // validation for constraint: string
        if (!is_null($codigoErro) && !is_string($codigoErro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoErro, true), gettype($codigoErro)), __LINE__);
        }
        $this->codigoErro = $codigoErro;
        return $this;
    }
    /**
     * Get crm value
     * @return string|null
     */
    public function getCrm()
    {
        return $this->crm;
    }
    /**
     * Set crm value
     * @param string $crm
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setCrm($crm = null)
    {
        // validation for constraint: string
        if (!is_null($crm) && !is_string($crm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crm, true), gettype($crm)), __LINE__);
        }
        $this->crm = $crm;
        return $this;
    }
    /**
     * Get dataAtualizacao value
     * @return string|null
     */
    public function getDataAtualizacao()
    {
        return $this->dataAtualizacao;
    }
    /**
     * Set dataAtualizacao value
     * @param string $dataAtualizacao
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setDataAtualizacao($dataAtualizacao = null)
    {
        // validation for constraint: string
        if (!is_null($dataAtualizacao) && !is_string($dataAtualizacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataAtualizacao, true), gettype($dataAtualizacao)), __LINE__);
        }
        $this->dataAtualizacao = $dataAtualizacao;
        return $this;
    }
    /**
     * Get dataNascimento value
     * @return string|null
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    /**
     * Set dataNascimento value
     * @param string $dataNascimento
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setDataNascimento($dataNascimento = null)
    {
        // validation for constraint: string
        if (!is_null($dataNascimento) && !is_string($dataNascimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNascimento, true), gettype($dataNascimento)), __LINE__);
        }
        $this->dataNascimento = $dataNascimento;
        return $this;
    }
    /**
     * Get especialidade value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getEspecialidade()
    {
        return isset($this->especialidade) ? $this->especialidade : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEspecialidade method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEspecialidade method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEspecialidadeForArrayConstraintsFromSetEspecialidade(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $medicoVOEspecialidadeItem) {
            // validation for constraint: itemType
            if (!is_string($medicoVOEspecialidadeItem)) {
                $invalidValues[] = is_object($medicoVOEspecialidadeItem) ? get_class($medicoVOEspecialidadeItem) : sprintf('%s(%s)', gettype($medicoVOEspecialidadeItem), var_export($medicoVOEspecialidadeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The especialidade property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set especialidade value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $especialidade
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setEspecialidade(array $especialidade = array())
    {
        // validation for constraint: array
        if ('' !== ($especialidadeArrayErrorMessage = self::validateEspecialidadeForArrayConstraintsFromSetEspecialidade($especialidade))) {
            throw new \InvalidArgumentException($especialidadeArrayErrorMessage, __LINE__);
        }
        if (is_null($especialidade) || (is_array($especialidade) && empty($especialidade))) {
            unset($this->especialidade);
        } else {
            $this->especialidade = $especialidade;
        }
        return $this;
    }
    /**
     * Add item to especialidade value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function addToEspecialidade($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The especialidade property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->especialidade[] = $item;
        return $this;
    }
    /**
     * Get imagem value
     * @return string|null
     */
    public function getImagem()
    {
        return $this->imagem;
    }
    /**
     * Set imagem value
     * @param string $imagem
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setImagem($imagem = null)
    {
        // validation for constraint: string
        if (!is_null($imagem) && !is_string($imagem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imagem, true), gettype($imagem)), __LINE__);
        }
        $this->imagem = $imagem;
        return $this;
    }
    /**
     * Get nome value
     * @return string|null
     */
    public function getNome()
    {
        return $this->nome;
    }
    /**
     * Set nome value
     * @param string $nome
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setNome($nome = null)
    {
        // validation for constraint: string
        if (!is_null($nome) && !is_string($nome)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nome, true), gettype($nome)), __LINE__);
        }
        $this->nome = $nome;
        return $this;
    }
    /**
     * Get numeroCPF value
     * @return string|null
     */
    public function getNumeroCPF()
    {
        return $this->numeroCPF;
    }
    /**
     * Set numeroCPF value
     * @param string $numeroCPF
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setNumeroCPF($numeroCPF = null)
    {
        // validation for constraint: string
        if (!is_null($numeroCPF) && !is_string($numeroCPF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCPF, true), gettype($numeroCPF)), __LINE__);
        }
        $this->numeroCPF = $numeroCPF;
        return $this;
    }
    /**
     * Get situacao value
     * @return string|null
     */
    public function getSituacao()
    {
        return $this->situacao;
    }
    /**
     * Set situacao value
     * @param string $situacao
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setSituacao($situacao = null)
    {
        // validation for constraint: string
        if (!is_null($situacao) && !is_string($situacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($situacao, true), gettype($situacao)), __LINE__);
        }
        $this->situacao = $situacao;
        return $this;
    }
    /**
     * Get tipoInscricao value
     * @return string|null
     */
    public function getTipoInscricao()
    {
        return $this->tipoInscricao;
    }
    /**
     * Set tipoInscricao value
     * @param string $tipoInscricao
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setTipoInscricao($tipoInscricao = null)
    {
        // validation for constraint: string
        if (!is_null($tipoInscricao) && !is_string($tipoInscricao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoInscricao, true), gettype($tipoInscricao)), __LINE__);
        }
        $this->tipoInscricao = $tipoInscricao;
        return $this;
    }
    /**
     * Get uf value
     * @return string|null
     */
    public function getUf()
    {
        return $this->uf;
    }
    /**
     * Set uf value
     * @param string $uf
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setUf($uf = null)
    {
        // validation for constraint: string
        if (!is_null($uf) && !is_string($uf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uf, true), gettype($uf)), __LINE__);
        }
        $this->uf = $uf;
        return $this;
    }
    /**
     * Get verificarAutoriazacao value
     * @return string|null
     */
    public function getVerificarAutoriazacao()
    {
        return $this->verificarAutoriazacao;
    }
    /**
     * Set verificarAutoriazacao value
     * @param string $verificarAutoriazacao
     * @return \ConectaMedico\Crm\StructType\MedicoVO
     */
    public function setVerificarAutoriazacao($verificarAutoriazacao = null)
    {
        // validation for constraint: string
        if (!is_null($verificarAutoriazacao) && !is_string($verificarAutoriazacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verificarAutoriazacao, true), gettype($verificarAutoriazacao)), __LINE__);
        }
        $this->verificarAutoriazacao = $verificarAutoriazacao;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ConectaMedico\Crm\StructType\MedicoVO
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
