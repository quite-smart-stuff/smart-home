import RPi.GPIO as GPIO

GPIO.setwarnings(False)

def ledon1(pin):
        GPIO.output(pin,GPIO.HIGH)
        print("led 1 on")
        return

GPIO.setmode(GPIO.BOARD)

GPIO.setup(15, GPIO.OUT)

ledon1(15)

#GPIO.cleanup()
