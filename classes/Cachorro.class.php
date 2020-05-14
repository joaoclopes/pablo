<?php
class Cachorro
{
    private $nascimento;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
/**
 * Set
 *
 * @param [type] $propriedade
 * @param [type] $valor
 */
    public function __set($propriedade, $valor)
    {
        if ($propriedade == 'Nascimento') {
            if (count(explode('/', $valor)) == 3) {
                echo "Dado '$valor', atribuido à '$propriedade' </br>";
                $this->$propriedade = $valor;
            } else {
                echo "Dado '$valor', não atribuido à '$propriedade' </br>";
            }
        } else {
            $this->$propriedade = $valor;
        }
    }

    /**
     * Get the value of nascimento
     */ 
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Set the value of nascimento
     *
     * @return  self
     */ 
    public function setNascimento($nascimento)
    {

        if (count(explode('/', $nascimento)) == 3) {
            echo "Dado '$nascimento', atribuido à propriedade Nascimento</br>";
            $this->nascimento = $nascimento;
        } else {
            echo "Dado '$nascimento', não atribuido à propriedade Nascimento</br>";
        }
        return $this;
    }
}
