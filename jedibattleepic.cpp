// miniblip led matrix demo

#include "mbed.h"
#include "neopixel.h"

// Matrix led output pin
#define DATA_PIN P0_9
DigitalIn pushbutton(P0_23);

#define MUTE  0.0
#define END   1.0
//-- Notes and frequencies (Hz)
#define DO_4  261.626
#define MI_4  329.628 
#define SOL_4 391.995 
#define SI_4  493.883
#define DO_5  523.251

//-- Tempo
#define TEMPO 200

//-- Default volume
#define VOL 0.4

//-- Notes for the imperial march. MUTE means silence.  END for marking the end
float notes[] = {MI_4, MUTE, MI_4, MUTE, MI_4, MUTE, DO_4, SOL_4, MI_4, MUTE, DO_4,  SOL_4,  MI_4, MUTE, 
                 SI_4, MUTE, SI_4, MUTE, SI_4, MUTE, DO_5, SOL_4, MI_4, MUTE, DO_4,  SOL_4,  MI_4, END};
                 
//--  Notes duration                 
float tempo[] = {2   ,    1,    2,    1,    2,   1,    2,     1,    2,    1,    2,      1,     2,    3,  
                 2   ,    1,    2,    1,    2,   1,    2,     1,    2,    1,    2,      1,     2,    0};
                 
//-- Declare speaker object
PwmOut speaker(P0_8);

void play()
{
  int i=0;
  
  //-- Reproduce all the notes in the list
  while(notes[i] != END) {
    
    //-- If silence, turn of the PWM
    if (notes[i] == MUTE) {
      speaker = 0.0;
    }
    else {
      speaker.period(1.0/notes[i]);  //-- Note
      speaker = VOL;                 //-- Set the volume
    }  
    //-- Note duration
    wait_ms(TEMPO * tempo[i]);
    
    //-- Move to the next note
    i++;
  }  
  
  //-- Turn off the speacker
  speaker = MUTE;
}

void void_matrix(neopixel::Pixel* aux, int tam=25){
    
    for(int i=0;i<tam;i++){
        aux[i].red=0;
        aux[i].green=0;
        aux[i].blue=0;
    }
}

//Si color = 1 --> rojo. Si color = 2 --> azul Si color = 3 --> azul
void encenderLed(neopixel::Pixel* aux,int posicion,int color){
    
    if(color == 1){
        aux[posicion].red = 0x33;
        aux[posicion].blue = 0x00;
        aux[posicion].green = 0x00;
    }else if(color == 2){
        aux[posicion].red = 0x00;
        aux[posicion].blue = 0x33;
        aux[posicion].green = 0x00;
    }else if(color == 3){
        aux[posicion].red = 0x00;
        aux[posicion].blue = 0x00;
        aux[posicion].green = 0x33;        
    }else if(color == 4){
        aux[posicion].red = 0x00;
        aux[posicion].blue = 0x00;
        aux[posicion].green = 0x00; 
    }else if(color == 5){ //morado
        aux[posicion].red = 0x22;
        aux[posicion].blue = 0x33;
        aux[posicion].green = 0x11; 
    }else if(color == 6){ //blanco
        aux[posicion].red = 0x255;
        aux[posicion].blue = 0x255;
        aux[posicion].green = 0x255; 
    }
}
//Si color = 1 --> rojo. Si color = 2 --> azul Si color = 3 --> azul
void sithyjedi0(neopixel::Pixel* aux){
    
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    
}

void sithyjedi1(neopixel::Pixel* aux){
    
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    encenderLed(aux,18,1);
    encenderLed(aux,17,1);
    }
void sithyjedi2(neopixel::Pixel* aux){
    
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    encenderLed(aux,18,1);
    encenderLed(aux,12,1);
    }
void sithyjedi3(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6);  
    encenderLed(aux,18,1);
    encenderLed(aux,13,1);
    }
void sithyjedi4(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    encenderLed(aux,18,1);
    encenderLed(aux,12,1);
    encenderLed(aux,16,2);
    encenderLed(aux,11,2);
    }
void sithyjedi5(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    encenderLed(aux,18,1);
    encenderLed(aux,13,1);
    encenderLed(aux,16,2);
    encenderLed(aux,11,2);
    }
void sithyjedi6(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    encenderLed(aux,13,1);
    encenderLed(aux,9,1);
    encenderLed(aux,16,2);
    encenderLed(aux,11,2);
    }
void sithyjedi7(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    encenderLed(aux,13,1);
    encenderLed(aux,9,1);
    encenderLed(aux,11,2);
    encenderLed(aux,5,2);
    }
void sithyjedi8(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,14,5);
    encenderLed(aux,19,5);    
    encenderLed(aux,24,5);    
    encenderLed(aux,10,6);
    encenderLed(aux,15,6);    
    encenderLed(aux,20,6); 
    encenderLed(aux,13,1);
    encenderLed(aux,18,1);
    encenderLed(aux,16,2);
    encenderLed(aux,17,2);
    }
void intro(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,3,1);
    encenderLed(aux,8,1);    
    encenderLed(aux,13,1);    
    encenderLed(aux,18,6);
    encenderLed(aux,23,6);    
    encenderLed(aux,1,2); 
    encenderLed(aux,6,2);
    encenderLed(aux,11,2);
    encenderLed(aux,16,6);
    encenderLed(aux,21,6);
    }
void acero(neopixel::Pixel* aux){
    void_matrix(aux);
    encenderLed(aux,0,4);
    }


int main() {
    int i;
    neopixel::Pixel vector[25];
    
    neopixel::PixelArray array(DATA_PIN);
    
    //int contador = 0;
    while(true){
            acero(vector);
            array.update(vector,25); 
            
            intro(vector);
            array.update(vector,25);            
            wait(1);
            play();
        
            sithyjedi0(vector);
            array.update(vector,25);            
            wait(1);
                 
            sithyjedi1(vector);
            array.update(vector,25);
            wait(1);
            
            sithyjedi2(vector);
            array.update(vector,25);
            wait(1);
            
            sithyjedi3(vector);
            array.update(vector,25);    
            wait(1);
            
            sithyjedi4(vector);
            array.update(vector,25);
            wait(1);
            
            sithyjedi5(vector);
            array.update(vector,25);
            wait(1);
            
            sithyjedi6(vector);
            array.update(vector,25);
            wait(1);
            
            sithyjedi7(vector);
            array.update(vector,25);
            wait(1);
            
            sithyjedi8(vector);
            array.update(vector,25);
            wait(1);
    
    
    }
 
    
}
