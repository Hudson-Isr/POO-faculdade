<?php

abstract class Usuario{
    protected string $nome;
    protected string $curso;
    protected string $disciplina;

    public function __construct($nome, $curso, $disciplina){
        $this->nome = $nome;
        $this->curso = $curso;
        $this->disciplina = $disciplina;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function getDisciplina(){
        return $this->disciplina;
    }
}
class Aluno extends Usuario{
    public function __construct($nome, $curso, $disciplina){
        parent::__construct($nome, $curso, $disciplina);
    }
}
class Professor extends Usuario{
    public function __construct($nome, $curso, $disciplina){
        parent::__construct($nome, $curso, $disciplina);
    }
}
class Nota{
    private int $avp1;
    private int $avp2;

    public function __construct($avp1,$avp2){
        $this->avp1 = $avp1;
        $this->avp2 = $avp2;
    }
    public function getAvp1(){
        return $this->avp1;
    }
    public function getAvp2(){
        return $this->avp2;
    }
    public function Avf(){
        $media = ($this->avp1 + $this->avp2) / 2;
        if($media < 7){
            echo "\nSua media foi: " . $media."\n" . "Parabens, você está na AVF!\n\n";
        }
        else if($media >= 7){
            echo "\nSua media foi: " . $media."\n" ."Parabens, você está Aprovado!\n\n";
        }
        elseif($media > 4)
            echo "\nSua media foi: " . $media."\n" ."Parabens, você está Reprovado!\n\n";
    }
}
$aluno = new Aluno("Hudson","Sistemas","Banco de dados");
$prof = new Professor("Tadeu","Sistemas","Banco de dados");
$nota = new Nota(8,8);

while(true){

    echo "*************\n"."Seja Bem-vindo!\n" ."1 - Aluno\n" ."2 - Professor\n" ."3 - Curso\n" ."4 - Nota\n" ."*************\n\n" ."Escolha um número: ";
    $input = readline();

    if($input<=0 or $input > 4){
        echo "\nTente novamente...\n\n";
    }
    elseif($input == 1){
        echo "\nNome: ". $aluno->getNome()."\n" ."Curso: ". $aluno->getCurso()."\n". "Disciplina: ". $aluno->getDisciplina()."\n\n";
    }
    elseif($input == 2){
        echo "\nNome: ". $prof->getNome()."\n". "Curso: ". $prof->getCurso(). "\n". "Disciplina: ". $prof->getDisciplina()."\n\n";
    }
    elseif($input == 3){
        echo "\nCurso: ". $aluno->getCurso() ."\n" ."Disciplina: ". $prof->getDisciplina() ."\n\n";
    }
    elseif($input == 4){
        echo "\nA nota da sua AVP1 Foi: " .$nota->getAvp1() . "\n"."A nota da sua AVP2 Foi: " .$nota->getAvp2() . "\n". $nota->Avf();
    }
}