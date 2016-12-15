import RPi.GPIO as GPIO
import time
GPIO.setwarnings(False)
def door_open(pin):
        GPIO.output(pin,GPIO.HIGH)
        print("door is opened for 3 seconds")
        time.sleep(3)
        GPIO.output(pin,GPIO.LOW)
        print("door is closed")
        time.sleep(1)
        return
GPIO.setmode(GPIO.BOARD)
GPIO.setup(37, GPIO.OUT)

door_open(37)

GPIO.cleanup()
