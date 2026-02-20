using System.ComponentModel.DataAnnotations;

namespace api2.Rg
{
    public class RgModell
    {
        [Key]
        public Guid Id { get; set; }
        [StringLength(8)] public required string Numero { get; set; }
        [StringLength(100)]     
        public required string Nome { get; set; }
        [StringLength(100)]
        public required string UrlFoto { get; set; }

        [StringLength(100)] public string? NomeMae { get; set; }
        
        [StringLength(50)] public string? NomePai { get; set; }
        
        public required DateOnly? DataNascimento { get; set; }
        
        public required String OrgaoExpedidor { get; set; }
        [StringLength(3)]
        public String? FatorRh {  get; set; }
        
        public String? Naturalidade { get; set; }
        public String? Observacao { get; set; }

    }
}
