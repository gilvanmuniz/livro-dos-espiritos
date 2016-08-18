

<?php

class LivroDosEspíritos implements LivroInterface
{

    private $table = "perguntas";
    private $table1 = "respostas";
    public $id;
    public $pergunta;

     public function setTable($table)
     {
         $this->table = $table;
         return $this;
     }
    public function getTable()
    {
        return $this-> table;

    }

    public function setTable1($table1)
    {
        $this->table1 = $table1;
        return $this;
    }
    public function getTable1()
    {
        return $this-> table1;

    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getId()
    {
        return $this-> id;

    }

    public function setPergunta($pergunta)
    {
        $this->pergunta = $pergunta;
        return $this;
    }
    public function getPergunta()
    {
        return $this-> pergunta;

    }
}








        /*
        $perguntas =[1=>"O que é Deus?", 2=>"O que se entende por infinito?", 3=>"Podemos dize que Deus é o Infinito?"];
        //var_dump($perguntas);

        $respostas = [1=>"-Inteligência Suprema Causa primária de todas as coisas.", 2=>"-O que não tem começõ nem fim",
                      3=>"-Definição incompleta, pobreza de linguagem"];


        if (isset($perguntas[$pergunta])){
        echo $perguntas[$pergunta] . "</br>";
        }
        if(isset($respostas[$pergunta])) {
            echo "</br>" . $respostas[$pergunta];
        }
        else{
                echo "</br>"." Pergunta não relacionada";
        }

        */
	?>



