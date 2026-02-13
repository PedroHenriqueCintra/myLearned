using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection.Metadata.Ecma335;
using System.Threading.Tasks;

namespace POOfolhaPagamento.Assalariado
{
    public abstract class SalarioModell{
        public string? Nome {get; set;}
        public string? Url {get; set;}
        public abstract string Tipo  {get; set;}
        public decimal Pagamento =>CalcularPagamento();
        
        public abstract decimal CalcularPagamento();
    }

    
}