
//RECEPTEUR
#include <Adafruit_CircuitPlayground.h>
#include <Wire.h>
#include <SPI.h>


void setup() {
  CircuitPlayground.begin();
  Serial.begin(9600);

  while (!Serial); // //On attends jusqu'à ce que le port serie soit ouvert
  
  CircuitPlayground.irReceiver.enableIRIn(); // Début de la reception
  Serial.println("Ready to receive IR signals");
}

void loop() {
  //On boucle
  if (CircuitPlayground.irReceiver.getResults()) {
    CircuitPlayground.irDecoder.decode();           //On decode
    CircuitPlayground.irDecoder.dumpResults(false);  
    Serial.println(CircuitPlayground.irDecoder.value); //On affiche
    CircuitPlayground.irReceiver.enableIRIn();      //Restart receiver
  }
}
