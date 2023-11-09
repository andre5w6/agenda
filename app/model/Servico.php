<?php

class Servico
{ 

    private $nome;
    private $tempo;
    private $valor;
    private $logo;



/*Método construtor da classe. É executado ao instanciar um objeto.
*/

public function __construct ($nome,$tempo,$valor,$logo)
{
    $this->nome = $nome;
    $this->tempo = $tempo;
    $this->valor = $valor;
    $this->logo = $logo;
}

// Métodos GET e SET para definir e consultar os
// valores dos atributos
public function getNome ()
{
    return $this ->nome;

}
public function setNome ($nome)
{
    $this->nome = $nome;
}


public function getTempo ()
{
    return $this ->tempo;

}
public function setTempo ($tempo)
{
    $this->nome = $tempo;
}


public function getValor ()
{
    return $this ->valor;

}
public function setValor ($valor)
{
    $this->nome = $valor;
}


public function getLogo ()
{
    return $this ->logo;

}
public function setLogo ($logo)
{
    $this->nome = $logo;
}




    // Método para cadastrar um serviço
    public function cadastrar()
    {
    }

    // Método para atualizar um serviço
    public function atualizar()
    {
    }

    // Método para apagar um serviço
    public function apagar()
    {
    }
}

