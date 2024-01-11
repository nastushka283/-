<?php
	echo "<table>\n";
		echo "<tr>\n";
			echo "<td><button class='buttonClass' style='width: 300px;' onClick='showForm(\"form1.php\");'>Вывод списка всех служащих</button></td>\n";
			echo "<td><button class='buttonClass' style='width: 300px;' onClick='showForm(\"form2.php\");'>Вывод списка офицерских составов</button></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td><button class='buttonClass' style='width: 300px;' onClick='showForm(\"form3.php\");'>Вывод списка всех обладателей золотого значка ГТО</button></td>\n";
			echo "<td><button class='buttonClass' style='width: 300px;' onClick='showForm(\"form4.php?nomer_voinsk_ch=1\");'>Вывод колличества вооружения в определённой части</button></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td colspan='2'><button class='buttonClass' style='width: 604px;' onClick='showForm(\"form5.php?nv=1&rt=1\");'>Вывод колличества должностей</button></td>	<!-- nv-звание rt-войсковая часть -->\n";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td><button class='buttonClass' style='width: 300px;' onClick='showForm(\"form6.php\");'>Редактирование таблицы служащих</button></td>\n";
			echo "<td><button class='buttonClass' style='width: 300px;' onClick='showForm(\"form7.php\");'>Редактирование таблицы вооружений</button></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td colspan='2'><button class='buttonClass' style='width: 604px;' onClick='showForm(\"form8.php\");'>Просмотр аудита</button></td>\n";
		echo "</tr>\n";
	echo "</table>\n";
	
	//Новая форма для отрисовки дополнительны форм
	echo "<div id='FormIdNew'></div>\n";
?>
