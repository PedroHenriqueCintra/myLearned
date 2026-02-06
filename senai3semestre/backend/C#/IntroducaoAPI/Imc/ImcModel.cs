using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Mail;
using System.Reflection;
using System.Reflection.PortableExecutable;
using System.Threading.Tasks;

namespace IntroducaoAPI.Imc
{
    public class ImcModel{
        public decimal Altura {set; get;}
        public decimal Peso {set; get;}
        public decimal Imc {set; get;}

        public ImcModel(decimal altura , decimal peso)
        {
            Altura = altura;
            Peso = peso;
            Imc = peso / (altura * altura);
        }
        
    }
}