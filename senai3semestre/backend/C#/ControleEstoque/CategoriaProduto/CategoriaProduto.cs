namespace CategoriaProduto
{
    public class CategoriaProduto
    {
        public CategoriaProduto(string nome, string descricao)
        {
            this.nome = nome;
            this.descricao = descricao;
        }

        public Guid id { get; set; }
        public string nome { get; set; }
        public string descricao { get; set; }
    }
}
