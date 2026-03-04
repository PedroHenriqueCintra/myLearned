'use client';
import { useSearchParams } from "next/navigation"

export default function Pagina3(){

    const params = useSearchParams();
    const id = params.get('id');
    const texto = id ? `O id é ${id}` : "sem id"
    return(
        <><h1> Bem vindo a pagina 3</h1><p>{texto}</p></>
    )
}