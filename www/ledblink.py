import RPi.GPIO as GPIO
import time
GPIO.setwarnings(False)
def blink(pin):
        GPIO.output(pin,GPIO.HIGH)
        print("led on")
        time.sleep(0.15)
        GPIO.output(pin,GPIO.LOW)
        print("led off")
        time.sleep(0.15)
        return
GPIO.setmode(GPIO.BOARD)
GPIO.setup(15, GPIO.OUT)
for i in range(0,10):
        blink(15)
GPIO.cleanup()
