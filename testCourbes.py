#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Fri Apr  5 13:54:03 2019

@author: pi
"""

import serial as s
import matplotlib.pyplot as plt
import time
"""
ser=s.Serial()
ser.port= "dev/ttyACM0"
ser.baudrate= 9600
ser.timeout=10 
"""

ser=s.Serial('/dev/ttyACM2',9600)
ser.timeout=10
#ser.open() 
for i in range(0,100):
    x = ser.readline()
    print (x)
#ser.close()

"""
x=[]
y=[]
z=[]
for i in range(0,10):
    x=ser.readline()
    vx float(serie.readline()) # lit la donnee sur la laison serie
    x.append(vx)		# ajout de mesure a la liste des valeurs
    instant=time.time()-start	# calcul du temps ecoule depuis l'instant initial
    temps.append(instant)		# ajout de instant a la liste des temps
    print (vx,instant) 
    

px= plt.plot([50,100,150,200,250,300], vx)
py= plt.plot([50,100,150,200,250,300], vy)
pz= plt.plot([50,100,150,200,250,300], vz)
 
plt.ion() 			# on entre en mode interactif
start=time.time()	# mesure de l'instant initial
 
i
 
plt.ioff() 		# on quitte le mode interactif pour rendre la main a l'utilisateur sur la courbe
plt.show() 		# afficher la courbe
 """