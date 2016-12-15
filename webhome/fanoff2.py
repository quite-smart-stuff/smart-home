import time
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)
GPIO.setup(16, GPIO.OUT)

print("fan 2 off")

GPIO.cleanup()
