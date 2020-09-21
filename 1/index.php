<html>

<head>
	<meta charset="UTF-8" />
	<title>Задачи по работе с файлами - ИИТ 04.09</title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css" />
	<script src="../semantic/dist/semantic.min.js"></script>
</head>

<body>
	<div class="ui container" style="max-width: 768px;padding: 3rem 0;">
		<div class="ui very padded segment">
			<h2 class="ui header">
				Задача 1
				<div class="sub header">
					ИНТЕРНЕТ И ИНТРАНЕТ ТЕХНОЛОГИИ / Задачи по работе с файлами
				</div>
			</h2>
			<p>
				В файле содержится информацию об успеваемости в виде<br>
				Иванов 4 4 5<br>
				Петров 5 4 5<br>
				Сидоров 3 4 5<br>
				Ввести в форму ограничение и вывести на экран всех тех, у кого суммарный балл больше или равен
				введенному ограничению. Также результат записать в другой файл.
			</p>
			<div class="ui section divider"></div>
			<div class="three ui buttons">
				<a class="ui blue left labeled icon button disabled" href="..">
					Предыдущая
					<i class="left arrow icon"></i>
				</a>
				<a class="ui teal icon button" href="..">
					<i class="home icon"></i>
				</a>
				<a class="ui blue right labeled icon button" href="../2/">
					Следующая
					<i class="right arrow icon"></i>
				</a>
			</div>
			<div class="ui section divider"></div>
			<div class="ui grid">
				<div class="eight wide column">
					<div class="ui sub header">Минимальный суммарный балл</div>
					<br>
					<div class="ui fluid input">
						<input type="text" placeholder="11" id="minval" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;">
					</div>
					<button class="ui bottom attached icon fluid button" onclick="search();">
						Продолжить <i class="right arrow icon"></i>
					</button>
				</div>
				<div class="eight wide column">
					<div class="ui sub header">Содержимое файла</div>
					<br>
					<div id="file" style="padding: .78571429em 1em;border: 1px solid rgba(34,36,38,.15);border-radius: .28571429rem;">
						<?php
						$val = htmlspecialchars($_GET["v"]);
						$fd = fopen('data.txt', 'rt');
						$fr = fopen('result.txt', 'wt');
						fwrite($fr, "");
						if ($fd && $fr) {
							while (!feof($fd)) {
								$mytext = fgets($fd, 999);
								$arr = explode(" ", $mytext);
								$arr = array_slice($arr, 1);
								$arr = array_map(function ($value) {
									return intval($value);
								}, $arr);
								$sum = 0;
								foreach ($arr as $v) {
									$sum += $v;
								}
								if (!$val) {
									echo "<span class=\"s " . $sum . "\">" . $mytext . "</span><br>";
								} else if (intval($val) <= $sum) {
									echo "<span class=\"s " . $sum . "\"style='color:green;'>" . $mytext . "</span><br>";
									fputs($fr, $mytext);
								} else {
									echo "<span class=\"s " . $sum . "\"style='color:red;'>" . $mytext . "</span><br>";
								}
							}
						} else echo "Ошибка при открытии файла";
						fclose($fd);
						fclose($fr);
						?>
					</div>
				</div>
			</div>
		</div>
		<center>
			<a class="ui violet tertiary button" href="data.txt" target="_blank">data.txt</a>
			<a class="ui purple tertiary button" href="result.txt" target="_blank">result.txt</a>
		</center>
	</div>
	<script>
		function search() {
			location.href = '?v=' + $("#minval").val();
		}
	</script>
</body>

</html>