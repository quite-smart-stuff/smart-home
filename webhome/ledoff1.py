import RPi.GPIO as GPIO

GPIO.setwarnings(False)

def ledoff1(pin):
        GPIO.output(pin,GPIO.LOW)
        print("led 1 off")
        return

GPIO.setmode(GPIO.BOARD)

GPIO.setup(15, GPIO.OUT)

ledoff1(15)

GPIO.cleanup()
