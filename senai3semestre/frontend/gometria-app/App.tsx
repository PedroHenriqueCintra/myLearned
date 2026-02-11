import { StatusBar } from 'expo-status-bar';
import { RadioButton } from 'react-native-paper';
import { useState } from 'react';
import { StyleSheet, Text, TextInput, View, Button } from 'react-native';
import React from 'react';



export default function App() {

  const [largura , setLargura] = useState("");
  const [altura , setAltura] = useState("");
  const [respostaJson, setRespostaJson] = useState<IJson>(); 
  const [forma, setForma] = useState('retangulo');
 



  
  const url = `http://pedro2026.runasp.net/${forma}/?largura=${largura}&altura=${altura}`;

  async function ConsultarApi(){
    const resposta = await fetch(url);
    setRespostaJson(await resposta.json())
    


  }

  return (
    <View style={styles.container}>
      <Text style={styles.titulo}>Calculo Geometrico</Text>
      <TextInput style={styles.input}
      placeholder='largura'
      value={largura}
      onChangeText={setLargura}
      >

      </TextInput>

      <TextInput style={styles.input}
      placeholder='altura'
      value={altura}
      onChangeText={setAltura}
      >

      </TextInput>
      <Button title='enviar' onPress={ () => ConsultarApi()}></Button>
      <Text style ={styles.texto}>Área: {respostaJson?.area}</Text>
      <Text style ={styles.texto}>Perimetro: {respostaJson?.perimetro}</Text>

      <RadioButton.Group onValueChange={value => setForma(value)} value={forma}>
      <RadioButton.Item label="retangulo" value="retangulo" color='white'/>
      <RadioButton.Item label="triangulo" value="triangulo" color='white' />
    </RadioButton.Group>


    </View>
  );
}

interface IJson{
    largura : number, 
    altura : number,
    area : number,
    perimetro : number
  }

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#ff3131',
    alignItems: 'center',
    justifyContent: 'center',
    gap: 10
  },
  titulo: {
    color: 'white',
    fontSize : 40 ,
    fontWeight : 'bold'
  },

  input: {
    backgroundColor: "white",
    width: '70%',
    borderRadius: 10
  },
  texto: {
      color: "white"
  }
});
