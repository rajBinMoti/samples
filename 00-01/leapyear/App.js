import * as React from 'react';
import { View, StyleSheet, TextInput, Button } from 'react-native';
import Constants from 'expo-constants';

export default function App() {

  const [year, setyear] = React.useState();

  return (
    <View style={styles.container}>
      <TextInput
        style={styles.input}
        onChangeText={setyear}
        value={year}
        placeholder="Enter year"
        keyboardType="numeric"
      />
      <Button
        title={"Check"}
        onPress={() => {
          let _year = Number(year);
          if (_year % 4 == 0) {
            alert("Year " + year + " is a leap-year.");
          } else {
            alert("Year " + year + " is not a leap-year.");
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
