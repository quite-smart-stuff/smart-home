import RPi.GPIO as GPIO
import time
#GPIO.setwarnings(False)

GPIO.setmode(GPIO.BOARD)
# set up GPIO input channel
GPIO.setup(7, GPIO.IN)
# set up GPIO output channel
GPIO.setup(39, GPIO.OUT)

while True:
       i=GPIO.input(7)
       if i==0:                 #When output from motion sensor is LOW
             print "No intruders",i
             GPIO.output(39, GPIO.LOW) #0)  #Turn OFF LED
             time.sleep(0.1)
       elif i==1:               #When output from motion sensor is HIGH
             print "Intruder detected",i
             GPIO.output(39, GPIO.HIGH) #1)  #Turn ON LED
             time.sleep(0.1)

