
//EMETTEUR
#include <Adafruit_CircuitPlayground.h>
#include <Wire.h>
#include <SPI.h>


float X;
float Y;
float Z;
 
void setup() {
  CircuitPlayground.begin();
}
 

#define PROTOCOL NECX
#define BITS 32
#define axeX CircuitPlayground.motionX()
#define axeY CircuitPlayground.motionY()
#define axeZ CircuitPlayground.motionZ()
 
void loop() {
  
  CircuitPlayground.irSend.send(PROTOCOL,axeX,BITS);
  CircuitPlayground.irSend.send(PROTOCOL,axeY,BITS);
  CircuitPlayground.irSend.send(PROTOCOL,axeZ,BITS);
  delay(1000);
  
}
