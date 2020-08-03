<?php
/*EJERCICIO SLOT MACHINE
El programa recibe un parámetro que será un número entero llamado capital.
El juego implica una cantidad variable de partidas. El juego terminará cuando el jugador se quede sin dinero o supere el doble de la cantidad inicial de su capital.
Al iniciar el juego se mostrará el capital inicial. En cada tirada se mostrará el número de jugada, las tres figuras obtenidas, la ganancia de la tirada y el capital total después de haber pagado/cobrado la apuesta.
La apuesta siempre será de 5 centavos. La tabla de premios será la siguiente:
Tres sietes → 100 veces la apuesta
Tres figuras iguales (a excepción del siete) → 6 veces la apuesta
Dos sietes → 4 veces la apuesta
Dos figuras iguales (a excepción del siete) → 2 veces la apuesta*/

$capital = 100;
$partidas = 3;
$dinero = $capital;
$dinero_inicial = $dinero;

//comprobar que puede jugar
if(($dinero <= 0) || ($dinero >= $dinero_inicial*2)){
//No puede jugar mas
	echo "Fin de la partida";
}else{
//Puede seguir jugando
	echo "El capital inicial es: $capital";
	

}
?>