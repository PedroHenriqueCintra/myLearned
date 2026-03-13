using System;
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace ApiControleEstoque.Migrations
{
    /// <inheritdoc />
    public partial class CriarUnidadeMedida : Migration
    {
        /// <inheritdoc />
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "UnidadesMedida",
                columns: table => new
                {
                    id = table.Column<Guid>(type: "uniqueidentifier", nullable: false),
                    sigla = table.Column<string>(type: "nvarchar(10)", maxLength: 10, nullable: false),
                    descricao = table.Column<string>(type: "nvarchar(max)", nullable: true),
                    fracionavel = table.Column<bool>(type: "bit", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_UnidadesMedida", x => x.id);
                });
        }

        /// <inheritdoc />
        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "UnidadesMedida");
        }
    }
}
