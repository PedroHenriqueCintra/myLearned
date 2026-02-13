using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace POOfolhaPagamento.Assalariado
{
    public class Horista : SalarioModell{
        public override string Tipo {get; set;} = "Horista";
        public decimal HorasTrabalhadas {get; set;}
        public decimal ValorPorHora {get; set;}


        public Horista(string nome, string url, decimal horasTrabalhadas, decimal valorPorHora){
            Nome = nome;
            Url = url;
            HorasTrabalhadas = horasTrabalhadas;
            ValorPorHora = valorPorHora;
        }
        public override decimal CalcularPagamento()
        {
            return HorasTrabalhadas * ValorPorHora;
        }
    }
}