using area.calculos;
namespace area.calculos
{
    public abstract class PoligonoModell
    {
        public abstract string Tipo { get; }
        public decimal Area { get; set; }
        public decimal Perimetro { get; set; }

        public abstract decimal CalcularArea();
        public abstract decimal CalcularPerimetro();
    }

}