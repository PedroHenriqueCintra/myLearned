using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using ProdutoDomain;

namespace ApiControleEstoque.Data
{
    public class ApiControleEstoqueContext : DbContext
    {
        public ApiControleEstoqueContext (DbContextOptions<ApiControleEstoqueContext> options)
            : base(options)
        {
        }

        public DbSet<ProdutoDomain.UnidadeMedida> UnidadesMedida { get; set; } = default!;
        public DbSet<ProdutoDomain.Categoria> Categoria { get; set; } = default!;
    }
}
