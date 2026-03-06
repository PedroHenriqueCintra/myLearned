using CursoDominio;

alunoModel aluno1 = new("Alexandre Brito", 29);
alunoModel aluno2 = new("Bruno de Paula", 19);
alunoModel aluno3 = new("Rafael Tabolka", 10);
aluno1.CriarNota("algoritimo", 101);
//aluno2.CriarNota("banco de dados", 110);

CursoModel curso = new("Back-End", 18);
CursoModel curso1 = new("Front-End", 20);
CursoModel curso2 = new("Banco de Dados", 30);
curso.MatricularAluno(aluno1);
curso.MatricularAluno(aluno2);
curso.MatricularAluno(aluno3);


