
# Faculdade

TDE 2:

Em equipe, deve desenvolver usando Orientação de Objetos e PHP, o seguinte projeto:

Faculdade (Equipes: Pedro Lucas, Hudson Israel, Felipe de Oliveira, Daniel Almeida, Lucas Borges);


## Autores

- [@Hudson-Isr](https://github.com/Hudson-Isr)
- [@Lucas-Rept](https://github.com/Lucas-Rept)
- [@SrTorpedro](https://github.com/SrTorpedro)
- [@danieltac](https://github.com/danieltac)


## Usado por

Esse projeto é usado pelas seguintes Função:

- Verificar Aluno e Professor;
- Verificar Curso e Disciplina;


## Screenshots

![TDE2](https://user-images.githubusercontent.com/92607068/230204934-3672dc69-3118-45b7-80b8-38b72fd8a477.png)


## Aprendizados

Utilização de funções e classes abstratas, estender conteúdos de classes PAI e parent::__construct.


## Uso/Exemplos

```PHP
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
```

