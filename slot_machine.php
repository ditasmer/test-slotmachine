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

$capital_inicial = 100;
$capital= $capital_inicial;
$partidas = 3;
$partida = 0;
$apuesta = 10;
$fin_partidas = false;
$fin_capital = false;
$ganancia = 0;
$figuras = '';

echo "El capital inicial es: $capital_inicial \n";
//comprobar que puede jugar por capital y partidas
while(!$fin_partidas && !$fin_capital){
	$partida++;
	//numero de jugada
	echo "Partida: $partida";
	//Capital actual
	$capital=$ganancia + $capital;
	echo "Capital total: $capital";

	//valida situacion partida y capital actual
	if($partida == $partidas){
		$fin_partidas = true;
		//No puede jugar mas
		echo "Fin de la partida";
	}
	if(($capital <= 0) || ($capital >= $capital_inicial*2)){
		$fin_capital = true;
	}
	

}
?>