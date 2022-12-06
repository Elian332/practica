<?php

						echo "<h1>Variables</h1>";
echo "<h4>Crea un código PHP donde crees las variables primerNumero y segundoNumero y asigna
valor 8 al primer número y 5 al segundo número:

a) El resto de dividir el primer número entre 5.

b) El resultado de dividir el primer número entre el segundo.

c) El resultado de sumar los dos números.</h4>";

echo"<h2>  Variable numero uno = 8 </h2>";
echo"<h2>  Variable numero  dos = 5 </h2>";

$priNumero = 8 ;
$segN = 5 ;


echo"<h3>Residuo</h3>"; echo"<h2> 8 % 5 = </h2> " ; echo $priNumero % $segN  ;
echo"<h3>Suma </h3> " ; echo"<h2> 8 / 5 = </h2> " ; echo $priNumero /  $segN   ;
echo"<h3>Suma </h3>" ;  echo"<h2> 8 + 5 = </h2> " ; echo  $priNumero + $segN   ;


						echo "<h1>Variables con mensaje en pantalla</h1>"; 
echo "<h4>Crea un código PHP donde crees las variables a y b y usando los operadores adecuados haz
que se muestren los siguientes mensajes por pantalla.</h4>";

$a= 4;$b= 2;$c= 5;$d= 3;$in1= 4;$in2= 2;


					echo"<h2>Operadores de incremento</h2>";

echo " Incrementa antes de multiplicar, 4 + 2=  (6) , 6 * 2= (12) " ;
echo ++$in1*$in2 ;
echo"<h4>El nuevo valor de a es de 6 </h4>";


echo "Incrementa despues de multiplicar, 4 * 2 = (8), 8 + 2 = (10)";
echo $in1++ *$in2;
echo "<h4>El nuevo valor de a es de 10 </h4> " ;


echo "Se resta antes de multiplicar, 4 - 1 = (3), 3 * 2 = (6)";
 echo -$in1 * $in2;
echo "<h4>El nuevo valor de a es de 3 </h4>" ; 


					echo "<h1>Operadores de asignación compuestos</h1>";

	echo " 4 + 2 =";echo $a += $b;		echo "<h4>La suma es igual a 6 </h4> " ;
	
	
	echo " 4 - 2 =";	echo $a -= $b;	echo "<h4>La resta es igual a 2 </h4>" ;


	echo " 4 * 2 =";	echo $a *= $b;		echo "<h4>La multiplicacion es igual a 8 </h4> " ;

	
	echo " 4 / 2 ="; 	echo$a /= $b; 	echo "<h4>La divicion es igual a 2 </h4>"  ;


	echo " 4 % 2 =";	echo$a %= $b;	echo "<h4> El residuo es igual a 0 </h4> " ;


	?>