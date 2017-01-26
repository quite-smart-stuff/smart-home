#http://www.rpiblog.com/2012/09/using-gpio-of-raspberry-pi-to-blink-led.html
#sudo python setup.py 
#if you override without GPIO.cleanup() value you can disable warning GPIO.setwarnings(False)

import RPi.GPIO as GPIO  
import time  
# blinking function  
def blink(pin):  
        GPIO.output(pin,GPIO.HIGH)  
        time.sleep(1)  
        GPIO.output(pin,GPIO.LOW)  
        time.sleep(1)  
        return  
# to use Raspberry Pi board pin numbers  
GPIO.setmode(GPIO.BOARD)  
# set up GPIO output channel  
#GPIO.setup(13, GPIO.OUT)
GPIO.setup(37, GPIO.OUT)  
# blink GPIO26 5 times  
for i in range(0,5):  
        blink(37)  
GPIO.cleanup()
