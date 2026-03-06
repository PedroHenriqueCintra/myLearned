namespace CursoDominio
{
    public class CursoModel
    {
        public CursoModel(string nomeCurso, int idadeMinima)
        {
            this.nomeCurso = nomeCurso;
            this.idadeMinima = idadeMinima;
        }

        public string nomeCurso { get; set; }
        public int idadeMinima { get; set; }
        private List<alunoModel> _aluno { get; set; } = [];
        public IReadOnlyList<alunoModel> alunos => _aluno;


        public void MatricularAluno(alunoModel Aluno)
        {
            if (Aluno.Idade < idadeMinima)
            {
                throw new ArgumentException("O aluno nao tem a idade minima exigida");
            }
            _aluno.Add(Aluno);
            Console.WriteLine("O aluno " + Aluno.NomeAluno + "Foi matriculado no curso " + nomeCurso);
        }

    }

}
