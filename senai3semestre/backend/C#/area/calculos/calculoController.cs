using Microsoft.AspNetCore.Mvc;
using area.calculos;
namespace area.calculos
{
    [ApiController]
    [Route("[controller]")]
    public class calculoController : ControllerBase
    {
        [HttpGet("/calculo")]
        public IList<PoligonoModell> Get()
        {
             var poligonos = new List<PoligonoModell>()
            {
                new RetanguloModell(4,5),
                new RetanguloModell (2,4),
                new CirculoModell(3),
                new CirculoModell(8)


            };

            return poligonos ;
        }
    }
}