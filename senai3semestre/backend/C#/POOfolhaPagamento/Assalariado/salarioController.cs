using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace POOfolhaPagamento.Assalariado
{
    [ApiController]
    [Route("[controller]")]
    public class salarioController : ControllerBase
    {
        [HttpGet("/funcionario")]

        public List<SalarioModell> Get()
        {
             var funcionarios = new List<SalarioModell>()
            {
                new Comissionado("João", "https://randomuser.me/api/portraits/men/94.jpg", 5, 80000),
                new Comissionado("Maria", "https://randomuser.me/api/portraits/women/92.jpg", 3, 50000),
                new Horista("Carlos", "https://randomuser.me/api/portraits/men/94.jpg", 46, 22),
                new Horista("Pedro", "https://randomuser.me/api/portraits/men/33.jpg", 43, 18),
                new Assalariado("Felipe", "https://randomuser.me/api/portraits/men/56.jpg", 5000, 2000),
                new Assalariado("Ana", "https://randomuser.me/api/portraits/women/55.jpg", 7000, 2000),
            };

            return funcionarios;
        }
    }
}