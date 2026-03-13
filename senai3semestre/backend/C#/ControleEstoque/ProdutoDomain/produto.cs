using System.ComponentModel.DataAnnotations;

namespace ProdutoDomain
{
    public class Produto
    {
        public Produto(bool habilidade, string nome, string nomeArquivoFoto, string descricao, decimal quantidadeAtual)
        {
            Habilidade = habilidade;
            Nome = nome;
            NomeArquivoFoto = nomeArquivoFoto;
            Descricao = descricao;
            QuantidadeAtual = quantidadeAtual;
        }
        [Key]
        public Guid id { get; set; }
        public bool Habilidade { get; set; } = true;
        public Categoria CategoriaProduto { get; set; }
        public UnidadeMedida UnidadeMedida { get; set; }
        public string Nome { get; set; }
        public string NomeArquivoFoto { get; set; }
        public string Descricao { get; set; }
        public decimal QuantidadeAtual { get; set; } = 0m;

    }
}
