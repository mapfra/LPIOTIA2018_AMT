"""
Created on Thu May 16 15:20:20 2019
@author: pi
#pub
mosquitto_sub -h localhost -t "sensor/temp"
"""

##Script de test du broker mqtt; simple transmission de données

import paho.mqtt.publish as publish
X = 0
Y = 0
Z = 10

valeur=str(X)+' ' +str(Y)+ ' ' +str(Z)
publish.single("sensor/temp", valeur ,hostname="localhost")