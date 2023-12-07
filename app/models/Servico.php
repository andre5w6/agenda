<?php

include_once 'Database.php';

class Servico
{
    private $id;
    private $nome;
    private $logo;
    private $valor;
    private $tempo;
    private $empresa_id;

    public function __construct($id, $nome, $logo, $valor, $tempo, $empresa_id)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->logo = $logo;
        $this->valor = $valor;
        $this->tempo = $tempo;
        $this->empresa_id = $empresa_id;
    }

    // Getters e Setters para os atributos

    public function getid()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getTempo()
    {
        return $this->tempo;
    }

    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }

    public function getEmpresaId()
    {
        return $this->empresa_id;
    }

    public function setEmpresaId($empresa_id)
    {
        $this->empresa_id = $empresa_id;
    }

    // Métodos para cadastro
    public function cadastrar()
    {
        // Conexão com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Prepara a consulta SQL
        $stmt = $conn->prepare("INSERT INTO servico (nome, tempo, valor, logo, empresa_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sidsi", $this->nome, $this->tempo, $this->valor, $this->logo, $this->empresa_id);

        // Executa a consulta
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        } else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    // Método para atualização
    public function atualizar()
    {
        // Conexão com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Prepara a consulta SQL
        $stmt = $conn->prepare("UPDATE servico SET nome = ?, logo = ?, valor = ?, tempo = ?, empresa_id = ? WHERE id = ?");
        $stmt->bind_param("ssdiii", $this->nome, $this->logo, $this->valor, $this->tempo, $this->empresa_id, $this->id);

        // Executa a consulta
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        } else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    // Método para apagar
    public function deletar()
    {
        // Conexão com o banco de dados
        $db = new Database();
        $conn = $db->connect();

        // Prepara a consulta SQL
        $stmt = $conn->prepare("DELETE FROM servico WHERE id = ?");
        $stmt->bind_param("i", $this->id);

        // Executa a consulta
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        } else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }
}
