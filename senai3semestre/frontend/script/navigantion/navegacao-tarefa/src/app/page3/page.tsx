'use client';
import Link from "next/link";
import { useSearchParams } from "next/navigation"

export default function Pagina3(){

    const params = useSearchParams();
    const id = params.get('id');
    const texto = id ? `O id é ${id}` : "sem id"
   return(
    <>
        <h1> esse é o cadastro</h1>
        <p style={{color: "black"}}>{texto}</p>
        <Link style = {{color:"black"}}href={'/page3?id=8'}>Pagina com id</Link>
    </>
);
}