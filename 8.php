<?php
/*Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является*/
$age = "-1";
if ( $age > 17 and $age < 60){
	echo "Вам еще работать и работать";
}
elseif (18 > $age and 0 < $age ) {
echo "Вам еще рано работать";
}
elseif ( $age > 59) {
	echo "Вам пора на пенсию";
}
else{
	echo "Неизвестный возраст";
}
?>