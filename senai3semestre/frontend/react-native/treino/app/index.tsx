import { Link } from "expo-router";
import { View, Text } from "react-native";

export default function Index(){
    return(
        <View>
            <Link href={"/telas/telaCadastro"}>
            <Text>Abrir tela de cadastro</Text>
            </Link>
        </View>
    );
}