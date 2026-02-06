using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace IntroducaoAPI.Pokemon
{
    [ApiController]
    [Route("[controller]")]
    public class PokemonInicialController : ControllerBase
    {
        [HttpGet("/poke")]
        public IList<PokemonModel> Escolha()
        {
            return DadosMocados.RetornarIniciais();
        }
    }
}