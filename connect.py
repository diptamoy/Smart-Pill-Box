#!/usr/bin/python
import pymysql
import time
from Pi_pill import led,button
import RPi.GPIO as GPIO
from datetime import datetime
GPIO.setmode(GPIO.BOARD)      ## Use board pin numbering
GPIO.setup(11, GPIO.IN)
db=pymysql.connect("localhost","root","PlumuleUbikr",'project_smart_pill_box')

cursor=db.cursor()
dataa=""

while(1):
    cursor.execute("select * from pill_box")
    currentTime = time.localtime()
    results=cursor.fetchall()
    for row in results:
     data= row[4]
     dateTimeObj = datetime.now()
     timeStr = dateTimeObj.strftime("%H:%M:%S")
     print('Current Timestamp : ', timeStr)
     if timeStr == row[4]:
         print("This is Medicine Time:")
         print("i am ")
         print(row[2])
         dataa=row[2]
         print("eat me")
         led(row[6])
     else:
         print("Not Matched!")
     
     if GPIO.input(11)==True:
         button()
         print("Button pressed")
         sql="INSERT INTO M_consume SET med_name='"+dataa+"',consume_time='"+timeStr+"'"
         cursor.execute(sql)
         db.commit()
     time.sleep(1) 
             
    

