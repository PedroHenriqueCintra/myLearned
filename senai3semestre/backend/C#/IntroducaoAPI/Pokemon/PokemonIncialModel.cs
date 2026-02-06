using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace IntroducaoAPI.Pokemon
{
    public class PokemonModel
    {
       public int Numero  {get;}
       public string Nome {get;}
       public string Tipo1 {get;}
       public string? Tipo2 {get;}

       public string urlImagem {get;}

       public PokemonModel(int numero, string nome, string tipo1, string? tipo2, string urlImagem)
        {
            Numero = numero;
            Nome = nome;
            Tipo1 = tipo1;
            Tipo2 = tipo2;
            urlImagem = urlImagem;
        }

    }
}