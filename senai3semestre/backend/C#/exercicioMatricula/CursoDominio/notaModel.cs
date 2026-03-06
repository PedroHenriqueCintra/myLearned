using System;
using System.Collections.Generic;
using System.Text;

namespace CursoDominio
{
    public class NotaModel
    {
        internal NotaModel(string nomeAtividade, int valorNota)
        {
            NomeAtividade = nomeAtividade;
            ValorNota = valorNota;
        }

        public string NomeAtividade { get; set; }
        public int ValorNota { get; set; }


    }

}
