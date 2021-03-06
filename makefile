# Titulo:	Fichero MakeFile para la generacion de los ejecutables de la ultima practica
# Fecha:	06/04/15
# Autor:	Paula de la Hoz Garrido
# Versión:	1.0
# Opciones: 
# clean = elimina los ficheros residuales
# mrproper = elimina los ejecutables y la documentación

#****************************************************************
#**********************PROYECTO**********************************
#****************************************************************

all: testimagen

testimagen: testimagen.o
	g++ -o test testimagen.o
	
testimagen.o: testimagen.cpp imagen.h
	g++ -c -o testimagen.o testimagen.cpp
	
clean: 
	rm *.o test

mrproper: clean

