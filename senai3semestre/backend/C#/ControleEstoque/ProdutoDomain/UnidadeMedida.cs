using System.ComponentModel.DataAnnotations;

namespace ProdutoDomain
{
    public class UnidadeMedida
    {
        public UnidadeMedida( string sigla, string? descricao, bool fracionavel)
        {
            this.sigla = sigla;
            this.descricao = descricao;
            this.fracionavel = fracionavel;
        }

        [Key]
        public Guid id { get; set; }
        [StringLength(10)]
        public string sigla { get; set; }
        public  string? descricao { get; set; }
        public bool fracionavel { get; set; } = false;

    }
}
