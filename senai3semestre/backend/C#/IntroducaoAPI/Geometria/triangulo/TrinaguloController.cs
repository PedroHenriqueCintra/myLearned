
using Microsoft.AspNetCore.Mvc;

namespace IntroducaoAPI.Geometria.triangulo
{
    [ApiController]
    [Route("[controller]")]
    public class TrinaguloController : ControllerBase
    {
        [HttpGet("/triangulo")]

        public TrianguloModel Get(decimal altura, decimal largura){

            return new TrianguloModel(altura, largura);
        }

    }
}