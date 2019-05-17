"""
Created on Thu May 16 15:20:20 2019
@author: pi
"""

#Script de test du broket mqtt, simple subscription
import paho.mqtt.client as mqtt

def on_connect(client, userdata, flags, rc):
 print("Connected with result code "+str(rc))

 client.subscribe("sensor/temp")

def on_message(client, userdata, msg):
  msg.payload = msg.payload.decode("utf-8")
  print(str(msg.payload))

client = mqtt.Client()
client.on_connect = on_connect
client.on_message = on_message
client.connect("localhost")

client.loop_forever()