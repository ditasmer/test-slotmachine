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

echo "El capital inicial es: $capital_inicial ";
echo "Apuesta: $apuesta<br>";
echo "---------------------<br>";
//comprobar que puede jugar por capital y partidas
while(!$fin_capital){
	$partida++;
	//numero de jugada
	echo "Jugada núm: $partida <br>";
	//Capital antes
	$capital=$ganancia + $capital;
	echo "Capital actual: $capital <br>";

	//restar la apuesta del capital
	$capital = $capital - $apuesta;

	//genera 3 numeros aleatorios de 0 a 8
	$num1 = rand(0, 8);
	$num2 = rand(0, 8);
	$num3 = rand(0, 8);

	//mostrar imagenes --> numeros (echo de <img>)
	echo "$num1 $num2 $num3<br>";
	$tipo_premio = 0;
	if(($num1 == $num2) || ($num1 == $num3) || ($num2 == $num3)){
		if($num1 == 7){
			//Dos sietes
			$tipo_premio = 3;
		}else{
			//Dos iguales
			$tipo_premio = 4;
		}
	}else{
		if(($num1 == $num2) && ($num1 == $num3) && ($num2 == $num3)){
			if($num1 == 7){
				//tres sietes
				$tipo_premio = 1;
			}else{
				//tres iguales
				$tipo_premio = 2;
			}	
		}
	}

	//comprobar si hay premio
	//suma importe premio al capital
	switch ($tipo_premio) {
		case '1':
			//tres sietes
			$ganancia = $apuesta * 100;
			break;
		case '2':
			//tres figuras iguales (-7)
			$ganancia = $apuesta*6;
			break;
		case '3':
			//dos sietes
			$ganancia = $apuesta*4;
			break;
		case '4':
			//dos figuras iguales (-7)
			$ganancia = $apuesta*2;
			break;
		
		default:
			$ganancia = 0;
			break;
	}

	//muestra premio
	echo "Premio: $ganancia<br>";

	//muestra capital después de jugada
	$capital = $capital + $ganancia;
	echo "Capital después de jugar: $capital<br>";
	echo "---------------------<br>";

	//valida capital actual
	if(($capital <= 0) || ($capital >= $capital_inicial*2)){
		$fin_capital = true;
	}
	

}
?>