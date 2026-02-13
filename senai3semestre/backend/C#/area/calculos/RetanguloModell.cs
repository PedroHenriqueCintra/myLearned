using area.calculos;
namespace area.calculos
{

public class RetanguloModell : PoligonoModell
{
public override string Tipo => "Retangulo";

public decimal Altura { get; set; }
public decimal Largura { get; set; }

public RetanguloModell(decimal altura, decimal largura)
{
    Altura = altura;
    Largura = largura;
    Area = CalcularArea();
    Perimetro = CalcularPerimetro();
}

public override decimal CalcularArea()
{
    return Altura * Largura;
}

public override decimal CalcularPerimetro()
{
    return 2 * (Altura + Largura);
}
}}