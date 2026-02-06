using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace IntroducaoAPI.Geometria.Retangulo
{
    public class RetanguloModel
    {

        public decimal Largura { get ;}

        public decimal Altura { get ;} 

        public decimal Area{ get ;}

        public decimal Perimetro{ get ;}

        public RetanguloModel(decimal largura, decimal altura){
            Largura = largura;
            Altura = altura;
            Area = largura * altura;
            Perimetro = altura + altura + largura + largura;
        }
    }

   
}