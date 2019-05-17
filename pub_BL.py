"""Created on Thu May  9 10:47:59 2019
@author: ka811778"""
from datetime import datetime
import socket
import mysql.connector
import paho.mqtt.publish as publish
from adafruit_circuitplayground.express import cpx

size = 1024

nX = 0
nY = 0
nZ = 10

#connexion à la base de données
try:
   connection = mysql.connector.connect(host='localhost',
                             database='AMT_DB',
                             user='adminAMT',
                             password='mdpAMT')
   
#récuperation de l'id du sensor
cursor = connection.cursor()
cursor.execute("SELECT id FROM sensors WHERE adresse_mac = 'C5:F1:D6:00:39:40'")
idSensor = cursor.fetchone()

while True:

	X = cpx.acceleration.x
	Y = cpx.acceleration.y
	Z = cpx.acceleration.z

	time.sleep(0.5)

	nX = cpx.acceleration.x
	nY = cpx.acceleration.y
	nZ = cpx.acceleration.z

	#condition pour detecter une potielle chute
	if abs(X-nX) > 4 and abs(Y-nY) > 4 and abs(Z-nZ) > 4:
			publish.single("capteur/accelerometre", idSensor, hostname="localhost")


#On ferme la cnx à la bdd
 if(connection.is_connected()):
        cursor.close()
        connection.close()
exit
