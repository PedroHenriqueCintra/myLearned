using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace POOfolhaPagamento.Assalariado
{

    public class Comissionado : SalarioModell
    {
        public Comissionado(string nome, string url, decimal percComissao, decimal totalVendas){
            Nome = nome;
            Url = url;
            PercentualComissao = percComissao;
            TotalVendas = totalVendas;
        }

        public override string Tipo {get; set;} = "Comissionado";
        public decimal PercentualComissao { get; set; }
        public decimal TotalVendas { get; set; }


        public override decimal CalcularPagamento()
        {
            return (PercentualComissao / 100) * TotalVendas;
        }



    }

}