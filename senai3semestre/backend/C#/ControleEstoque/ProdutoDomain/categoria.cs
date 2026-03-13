using System.ComponentModel.DataAnnotations;

namespace ProdutoDomain
{
    public class Categoria
    {
        public Categoria(string nome, string descricao)
        {
            this.nome = nome;
            this.descricao = descricao;
        }
        [Key]
        public Guid id { get; set; }
        public string nome { get; set; }
        public string descricao { get; set; }
    }
}
