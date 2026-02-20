using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using api2.Rg;
using api2.Onibus;

namespace api2.Data
{
    public class api2Context : DbContext
    {
        public api2Context (DbContextOptions<api2Context> options)
            : base(options)
        {
        }

        public DbSet<RgModell> Rgs { get; set; } = default!;
        public DbSet<api2.Onibus.ParatyModel> Paratys { get; set; } = default!;
    }
}
