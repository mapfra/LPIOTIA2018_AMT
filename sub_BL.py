"""Created on Thu May  9 10:47:59 2019
@author: ka811778"""
from datetime import datetime
import mysql.connector
import paho.mqtt.client as mqtt
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

client = mqtt.Client()
client.on_connect = on_connect
client.on_message = on_message
client.subscribe("capteur/accelerometre")
client.connect("localhost")

def on_message(client, userdata, msg):
   msg.payload = msg.payload.decode("utf-8")

#connexion à la base de données
try:
   connection = mysql.connector.connect(host='localhost',
                             database='AMT_DB',
                             user='adminAMT',
                             password='mdpAMT')
   
while True:

	#si un message est publié
	if  str(msg.payload) != "":
		id_sensor = str(msg.payload)
		now = datetime.now()
		date_time = now.strftime("%m/%d/%Y %H:%M:%S")
		sql_insert_query = " INSERT INTO `alerte` ('potentielleAlerte', 'alerte_datetime', 'id_sensor') VALUES (1, date_time, idSensor)"
		cursor = connection.cursor()
		result  = cursor.execute(sql_insert_query)
		connection.commit()

		#envoie de mail
        msg= MIMEMultipart()
        msg['From'] = 'noreply@secureCheck.com'
        msg['To'] = 'secureCheck06@secureCheck.com'
        msg['Subject'] = 'Alerte de chute potentielle'
        message = 'Potientielle chute détectée pour le capteur n° '+ id_sensor
        msg.attach(MIMEText(message))
        mailserver= smtplib.SMTP('smtp.secureCheck06.com', 587)
        mailserver.ehlo()
        mailserver.starttls()
        mailserver.ehlo()
        mailserver.login('noreply@secureCheck.com', 'iotia2019')
        mailserver.sendmail('noreply@secureCheck.com', 'secureCheck06@secureCheck.com',
                            msg.as_string())
        mailserver.quit()


#On ferme la cnx à la bdd
 if(connection.is_connected()):
        cursor.close()
        connection.close()
exit
