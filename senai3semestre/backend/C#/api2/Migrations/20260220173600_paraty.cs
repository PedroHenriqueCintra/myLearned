using System;
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace api2.Migrations
{
    /// <inheritdoc />
    public partial class paraty : Migration
    {
        /// <inheritdoc />
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Paratys",
                columns: table => new
                {
                    id = table.Column<Guid>(type: "uniqueidentifier", nullable: false),
                    codigo = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    nome = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    Escola = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    linhaIda = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    linhaVolta = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    cidade = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    urlFoto = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    periodo = table.Column<string>(type: "nvarchar(max)", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Paratys", x => x.id);
                });
        }

        /// <inheritdoc />
        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Paratys");
        }
    }
}
