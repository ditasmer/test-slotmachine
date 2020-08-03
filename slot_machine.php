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
$partida = 0;
$apuesta = 10;
$fin_partidas = false;
$fin_capital = false;
$ganancia = 0;
$figuras = '';
$num1 = '';
$num2 = '';
$num3 = '';

echo "El capital inicial es: $capital_inicial \n";
//comprobar que puede jugar por capital y partidas
while(!$fin_capital){
	$partida++;
	//numero de jugada
	echo "Partida: $partida";
	//Capital antes
	$capital=$ganancia + $capital;
	echo "Capital total: $capital";

	//restar la apuesta del capital
	$capital = $capital - $apuesta;

	//genera 3 numeros aleatorios de 0 a 8
	$num1 = rand(0, 8);
	$num2 = rand(0, 8);
	$num3 = rand(0, 8);

	//mostrar imagenes --> numeros (echo de <img>)
	echo "$num1 $num2 $num3";

	//comprobar si hay premio

	//suma importe premio al capital

	//muestra premio

	//muestra capital después de jugada
	echo "Capital total: $capital";

	//valida capital actual
	if(($capital <= 0) || ($capital >= $capital_inicial*2)){
		$fin_capital = true;
	}
	

}
?>