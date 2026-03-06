using System;
using System.Collections.Generic;
using System.Text;

namespace CursoDominio
{
    public class alunoModel
    {
        public alunoModel(string nomeAluno, int idade)
        {
            NomeAluno = nomeAluno;
            Idade = idade;
        }

        public string NomeAluno { get; set; }
        public int Idade { get; set; }
        private List<NotaModel> _notas { get; set; } = [];
        public IReadOnlyList<NotaModel> notas => _notas;

        public void CriarNota(string nomeAtividade, int ValorNota)
        {
            if (ValorNota < 0 || ValorNota > 100)
            {
                throw new ArgumentException("O valor da nota nao é valido");
            }

            NotaModel objeto = new(nomeAtividade, ValorNota);
            _notas.Add(objeto);
            Console.Write("Na atividade " + objeto.NomeAtividade + "o aluno tirou " + ValorNota);

        }


    }
}
