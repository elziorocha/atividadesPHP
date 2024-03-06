<?php

class Aluno {
    private $nome;
    private $matricula;
    private $curso;

    public function __construct($nome, $matricula, $curso) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }
}

class CadastroAlunos {
    private $alunos = [];

    public function cadastrarAluno(Aluno $aluno) {
        $this->alunos[] = $aluno;
    }

    public function listarAlunos() {
        foreach ($this->alunos as $aluno) {
            echo "Nome: " . $aluno->getNome() . ", Matrícula: " . $aluno->getMatricula() . ", Curso: " . $aluno->getCurso() . "<br>";
        }
    }
}

$cadastro = new CadastroAlunos();

$aluno1 = new Aluno("João", "2021001", "Engenharia");
$aluno2 = new Aluno("Maria", "2021002", "Medicina");

$cadastro->cadastrarAluno($aluno1);
$cadastro->cadastrarAluno($aluno2);

echo "Lista de Alunos: <br>";
$cadastro->listarAlunos();

?>
