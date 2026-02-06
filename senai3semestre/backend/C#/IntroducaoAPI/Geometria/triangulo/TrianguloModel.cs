using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace IntroducaoAPI.Geometria.triangulo
{
     public class TrianguloModel
    {
        public decimal Largura{ get;}
        public decimal Altura{get;}
        public decimal Area{get;}


        public TrianguloModel(decimal largura, decimal altura)
        {
            Largura = largura;
            Altura = altura;
            Area = (largura * altura) / 2 ;
        }        

    }
}