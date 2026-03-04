import Link from "next/link";

export default function Pagina2(){
    return (
        <div
  style={{
    display: "flex",
    flexDirection: "column",
    alignItems: "center",
    justifyContent: "flex-start",
    height: "100vh",
    paddingTop: "20px"
  }}
>
    <h1 style={{ marginBottom: "10px" }}>
        Essa é a pesquisa
    </h1>

    <Link
        style={{
            color: "black",
            textDecoration: "none",
            fontSize: "18px"
        }}
        href={"/page3?id=8"}
    >
        cadastro com id
    </Link>
</div>
    )
}