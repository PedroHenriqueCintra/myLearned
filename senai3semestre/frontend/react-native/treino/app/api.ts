import axios from 'axios';

const api = axios.create({
    baseURL: "http://aledocs.runasp.net/api/cie/",
    timeout : 5000
});

export interface CartaoInterface{
    id: string;
    rm : number;
    nome: string;
    unidade: string;
    curso: string;
    nascimento: string;
    urlFoto: string;
}

export const cartaoEmBranco : CartaoInterface = {
    id: "",
    rm: 0,
    nome: "",
    unidade: "",
    curso: "",
    nascimento: "",
    urlFoto: ''
}

export async function BuscarPorId(id: string ) : Promise<CartaoInterface>{
    const resposta = await api.get(id);

    return resposta.data
}

export async function Atualizar (cartao: CartaoInterface){
    await api.put(cartao.id,cartao);
}

export async function Criar(cartao: CartaoInterface) : Promise<CartaoInterface>{
    const {id, ...cartaoSemId} = cartao;  

    const resposta = await api.post('', cartaoSemId);
    return resposta.data;

}