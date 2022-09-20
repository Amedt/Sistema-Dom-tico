#Importar modulo de pines
import RPi.GPIO as GPIO

#---- encender luz sala -------

# Sistema de numeracion de pines
GPIO.setmode(GPIO.BCM)


# pin modo salida
sala = GPIO.setup(17, GPIO.OUT)


# Pin activado
GPIO.output(sala, GPIO.OUT)
