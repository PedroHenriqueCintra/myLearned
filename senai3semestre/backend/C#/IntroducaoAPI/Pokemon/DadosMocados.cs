using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace IntroducaoAPI.Pokemon
{
    public static class DadosMocados
    {
        public static IList<PokemonModel>RetornarIniciais(){
            List<PokemonModel> lista = new List<PokemonModel>();

            PokemonModel bulbasaur = new(1,"Bulbasaur", "Grama", "Veneno", " ");
            PokemonModel charmander = new(4, "Charmander", "fogo", null, "");
            PokemonModel squirtle = new(4, "Squirtle", "Agua", null, "");

            lista.Add(bulbasaur);
            lista.Add(charmander);
            lista.Add(squirtle);
            
            return lista;
        }
    }
}