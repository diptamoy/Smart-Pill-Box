#!/usr/bin/python

import time
import RPi.GPIO as GPIO       ## Import GPIO library
GPIO.setmode(GPIO.BOARD)      ## Use board pin numbering
GPIO.setup(3, GPIO.OUT)       ##pill box 1
GPIO.setup(5, GPIO.OUT)       ##pill box 2
GPIO.setup(7, GPIO.OUT)       ##pill box 3
GPIO.setup(12, GPIO.OUT)       ##pill box 4
GPIO.setup(10, GPIO.OUT)      ##for buzzer
#for switch

GPIO.output(10, False)
GPIO.output(3, False)
GPIO.output(5, False)
GPIO.output(7, False)
GPIO.output(12, False)
def button():
    GPIO.output(10, False)
    GPIO.output(3, False)
    GPIO.output(5, False)
    GPIO.output(7, False)
    GPIO.output(12, False)
    ###PIO.input(11, False)
def led(x):
    GPIO.output(10, True)
    if(x==1):
        GPIO.output(3, True)
    if(x==2):
        GPIO.output(5, True)
    if(x==3):
        GPIO.output(7, True)
    if(x==4):
        GPIO.output(12, True)

	

