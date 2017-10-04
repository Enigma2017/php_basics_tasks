<?php
/*С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно)*/
$day = "10";
switch ($day) {
	case '1':
	echo "рабочий день";
		break;
	case '2':
	echo "рабочий день";
		break;
		case '3':
	echo "рабочий день";
		break;
		case '4':
	echo "рабочий день";
		break;
		case '5':
	echo "рабочий день";
		break;	
		case '6':
	echo "выходной день";
		break;
		case '7':
	echo "выходной день";
		break;
		default: 
		echo "неизвестный день";
}
?>