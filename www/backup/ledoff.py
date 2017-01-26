import RPi.GPIO as GPIO

GPIO.setwarnings(False)

def ledoff(pin):
        GPIO.output(pin,GPIO.LOW)
        return

GPIO.setmode(GPIO.BOARD)

GPIO.setup(37, GPIO.OUT)

ledoff(37)

#GPIO.cleanup()
