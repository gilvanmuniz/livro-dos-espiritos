<?php


class ServiceDbLivro
{
    public $db;
    public $entity;

    public function __construct(\PDO $db, LivroInterface $entity)
    {

        $this->db = $db;
        $this->entity = $entity;
    }

    public function Find($id){

        $query = "SELECT * FROM {$this->entity->getTable()} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue("id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function Find1($id){

        $query = "SELECT * FROM {$this->entity->getTable1()} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue("id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function Inserir()
    {
        $query = "INSERT INTO {$this->entity->getTable()}(id,pergunta)
        VALUES (:id,:pergunta)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->entity->getId());
        $stmt->bindValue(':pergunta', $this->entity->getPergunta());
        if ($stmt->execute()) {

            return true;
        }

    }

    public function Listar(){
        $query = "SELECT * FROM {$this->entity->getTable()}";

        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }

}


?>