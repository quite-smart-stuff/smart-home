import RPi.GPIO as GPIO

GPIO.setwarnings(False)

def ledoff2(pin):
        GPIO.output(pin,GPIO.LOW)
        print("led 2 off")
        return

GPIO.setmode(GPIO.BOARD)

GPIO.setup(16, GPIO.OUT)

ledoff2(16)

GPIO.cleanup()
