using area.calculos;
namespace area.calculos
{
    public class CirculoModell : PoligonoModell{
        public override string Tipo =>  "Circulo";
        public decimal Raio {get; set;}

        public CirculoModell(decimal raio)
        {
            Raio = raio;
            Area = CalcularArea();
            Perimetro = CalcularPerimetro();
        

        }

        public override decimal CalcularArea(){
            return 3.14m * (Raio * Raio);
        }

        public override decimal CalcularPerimetro()
        {
            return 2 * 3.14m * Raio;
        }
    }
}