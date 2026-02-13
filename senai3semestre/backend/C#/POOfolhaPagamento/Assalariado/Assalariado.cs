using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace POOfolhaPagamento.Assalariado
{
    public class Assalariado : SalarioModell{
        public override string Tipo {get; set;} = "Assalariado";
        public decimal Salario {get; set;}
        public decimal Desconto {get; set;}

        public Assalariado(string nome, string url, decimal salario, decimal desconto)
        {
            Nome = nome;
            Url = url;
            Salario = salario;
            Desconto = desconto;
        }

        public override decimal CalcularPagamento()
        {
            return Salario - Desconto;
        }


   
    }
}