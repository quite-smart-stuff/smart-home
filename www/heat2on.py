import RPi.GPIO as GPIO

GPIO.setwarnings(False)

def ledon2(pin):
        GPIO.output(pin,GPIO.HIGH)
        print("led 2 on")
        return

GPIO.setmode(GPIO.BOARD)

GPIO.setup(16, GPIO.OUT)

ledon2(16)

#GPIO.cleanup()
