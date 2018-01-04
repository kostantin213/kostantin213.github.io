#include <iarduino_4LED.h>     //  подключаем библиотеку для работы с четырёхразрядным LED индикатором
iarduino_4LED dispLED(4,5);    //  объявляем объект для работы с функциями библиотеки iarduino_4LED, с указанием выводов дисплея ( CLK , DIO ). Можно указывать любые выводы Arduino
int i;                         //  объявляем переменную для хранения числа минут  прошедших с момента старта скетча
int j;                         //  объявляем переменную для хранения числа секунд прошедших с момента старта скетча

void setup(){
  dispLED.begin();             //  инициируем LED дисплей
}

void loop(){
  i=millis()/1000/60%60;       //  получаем минуты  прошедшие с момента старта скетча
  j=millis()/1000   %60;       //  получаем секунды прошедшие с момента старта скетча
  dispLED.print(i, j, TIME);   //  выводим значения i и j как время (через двоеточие)
}