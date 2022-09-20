# Sistema-Domotico
Este sistema realiza el proceso de encendido de actuadores mediante 
voz en diferentes áreas  de la vivienda,  esto quiere decir, si el 
usuario  desea encender  la  luz de su dormitorio, solo tiene que 
iniciando con la palabra clave “Inti” seguido del actuador que desea 
realizar la acción por  el micrófono, posteriormente esta señal  se 
envía a la tarjeta Raspberry Pi inalámbricamente el cual contiene 
una base de datos que verificará si se realiza dicha petición o se 
desprecia, hay recalcar  que  debe haber una conexión a internet 
constante ya  que cada palabra es enviada a una librería annyang 
el cual transcribe cada palabra realizada por el micrófono, 
otra parte importante es que  todos los  elementos  están 
conectados a la  tarjeta Raspberry Pi. 
