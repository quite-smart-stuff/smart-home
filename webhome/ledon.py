import RPi.GPIO as GPIO

GPIO.setwarnings(False)

def ledon(pin):
        GPIO.output(pin,GPIO.HIGH)
        return

GPIO.setmode(GPIO.BOARD)

GPIO.setup(37, GPIO.OUT)

ledon(37)

#GPIO.cleanup()
