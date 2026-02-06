using Microsoft.AspNetCore.Mvc;

namespace IntroducaoAPI.Imc
{
    [ApiController]
    [Route("[controller]")]
    public class ImcController : ControllerBase
    {
        [HttpGet("/imc")]
        public ImcModel Get(decimal altura, decimal peso){
            return new ImcModel(altura, peso);
        }
    }
}
