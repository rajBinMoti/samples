import * as React from 'react';
import { View, StyleSheet, TextInput, Button } from 'react-native';
import Constants from 'expo-constants';

export default function App() {

  const [number, setnumber] = React.useState();

  return (
    <View style={styles.container}>
      <TextInput
        style={styles.input}
        onChangeText={setnumber}
        value={number}
        placeholder="Enter number"
        keyboardType="numeric"
      />
      <Button
        title={"Check"}
        onPress={() => {
          let _number = Number(number);
          if (_number % 2 == 0) {
            alert("Number " + number + " is Even");
          } else {
            alert("Number " + number + " is Odd");
          }
        }}
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    paddingTop: Constants.statusBarHeight,
    backgroundColor: '#ecf0f1',
    padding: 8,
  },
  input: {
    marginBottom: 10,
    borderColor: 'red',
    borderWidth: 1,
    height: 40,
    padding: 2,
  }
});
