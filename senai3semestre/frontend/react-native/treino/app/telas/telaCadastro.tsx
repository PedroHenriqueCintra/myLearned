
import { StyleSheet,View, Text, TextInput, Button } from "react-native";
import { Atualizar, BuscarPorId, cartaoEmBranco, CartaoInterface, Criar } from "../api";
import { useEffect, useState } from "react";


// "id": "c1b0e53c-ca3d-40f6-cea5-08de74155778",
//         "rm": 158,
//         "nome": "Talbolka",
//         "unidade": "Matão ",
//         "curso": "Desenvolvedor",
//         "nascimento": "2010-06-06",
//         "urlFoto": "https://randomuser.me/api/portraits/men/30.jpg"

export default function telaCadastro(){
    const [cartao, setCartao] = useState<CartaoInterface>(cartaoEmBranco);

    async function CarregarDados(){
        return 
        // const dados = await BuscarPorId("52d4278c-f2f5-4765-f490-08de7f60315a");
        // setCartao(dados);
    }

    async function Salvar(){
        if(cartao.id != ""){
            await Atualizar(cartao);
        } else{
            await Criar(cartao)
        }
        
    }

    useEffect(() => {CarregarDados() }, []);

    return(
        <View style={styles.View}>
            <Text>RM: </Text>
            <TextInput style={styles.Input} value={cartao.rm.toString()} onChangeText={(value) => setCartao({...cartao, rm: Number (value)})}></TextInput>
            <Text>Nome: </Text>
            <TextInput style={styles.Input} value={cartao.nome} onChangeText={(value) => setCartao({...cartao, nome: value})}></TextInput>
            <Text>Unidade</Text>
            <TextInput style={styles.Input} value={cartao.unidade} onChangeText={(value) => setCartao({...cartao, unidade: value})}></TextInput>
            <Text>Curso</Text>
            <TextInput style={styles.Input} value={cartao.curso} onChangeText={(value) => setCartao({...cartao, curso: value})}></TextInput>
            <Text>Nascimento</Text>
            <TextInput style={styles.Input} value={cartao.nascimento} onChangeText={(value) => setCartao({...cartao, nascimento: value})}></TextInput>
            <Text>urlFoto</Text>
            <TextInput style={styles.Input} value={cartao.urlFoto} onChangeText={(value) => setCartao({...cartao, urlFoto: value})}></TextInput>

            <View style={styles.div}>

                <Button
            title="Salvar"
            color={'green'}
            onPress={() => Salvar()}
            
            />

            <Button
            title="Deletar"
            color={'red'}
            />
            </View>
        </View>
    );
}

const styles = StyleSheet.create({
        Input :{
            borderColor: "#ccc",
            borderWidth: 1,
            padding: 5
        },
        View:{
            padding: 100
        },
        div:{
            display: 'flex',
            flexDirection: 'row',
            justifyContent: 'space-evenly'
        }
})