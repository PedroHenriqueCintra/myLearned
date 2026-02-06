using Microsoft.AspNetCore.Mvc;

namespace IntroducaoAPI.Geometria.Retangulo
{
    [ApiController]
    [Route("[controller]")]    
    
    public class RetanguloController : ControllerBase
    {
        [HttpGet("/retangulo")]
        public RetanguloModel Get(decimal largura, decimal altura){
            
            return new RetanguloModel(largura, altura);
        }
        
        
    }

    
}