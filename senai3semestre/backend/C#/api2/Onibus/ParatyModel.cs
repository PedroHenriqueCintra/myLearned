namespace api2.Onibus
{
    public class ParatyModel
    {
        public Guid id { get; set; }
        public required string codigo { get; set; }
        public required string nome { get; set; }
        public required string Escola { get; set; }
        public required string linhaIda { get; set; }
        public required string linhaVolta { get; set; }
        public required string cidade { get; set;}
        public required string urlFoto { get; set;}
        public required string periodo { get; set;}

    }
}
