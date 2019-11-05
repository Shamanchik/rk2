<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Здание 1</h2>
		<?php
			for($i=1900;$i<=2100;$i++){
				echo $i;
				}
		?>
		<h2>Задание 2</h2>
		<form method="POST">
			Введите значение коэффициента A:<input type="action" name="A"><br/>
			Введите значение коэффициента B:<input type="action" name="B"><br/>
			Введите значение коэффициента C:<input type="action" name="C"><br/>
			<input type="submit" value="OK"
		</form>
		<?php
			$A="$_POST(A)";
			$B="$_POST(B)";
			$C="$_POST(C)";
			
			$D=$B*$B-4*$A*$C;
			
			if($D<0) {
				echo "Корней нет";
				}
			else {
				$X1=(-$B-sqrt($D))/(2*$A);
				$X2=(-$B+sqrt($D))/(2*$A);
				echo $X1;
				echo $X2;
				}
		?>
	</body>
</html>
