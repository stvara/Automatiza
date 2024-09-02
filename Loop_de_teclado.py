
import keyboard
import time

def press_key(key):
    keyboard.press_and_release(key)


while True:
    press_key('k')
    press_key('f')

    time.sleep(1)
    press_key('k')
    press_key('f')
    press_key('g')
    time.sleep(1)
    press_key('k')
    time.sleep(1)
   
#simula o click de botões e aguarda um periodo para repetir os comandos