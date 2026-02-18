import { useState } from 'react';
import { StyleSheet, View, } from 'react-native';
import { Avatar, Card, IconButton, Text } from 'react-native-paper';

interface IFuncionarios{
  nome : string,
  url : number,
  pagamento : number,
  tipo : string 
}

export default function App() {
    
    
    async function ConsultarApi(){
      const resposta =  await fetch("http://pagamento2026.runasp.net/funcionario")
    }


  return (
    <View style={styles.container}>

  <Card>

    <Card.Content>
        <Avatar.Image size={96} source={{uri: "https://randomuser.me/api/portraits/men/8.jpg"}}/>
      </Card.Content>

    <Card.Content>
      <Text variant="titleLarge">Nome: Breno</Text>
      <Text variant="bodyMedium">Tipo: Comissionado</Text>
      <Text variant="bodyMedium">Pagamento: 2000.00</Text>

    </Card.Content>
    
  </Card>

    </View >
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
  Card : {
      display: "flex",
      flexDirection : "row",
      alignItems : "center"
  }
});