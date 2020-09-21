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
				Задача 2
				<div class="sub header">
					ИНТЕРНЕТ И ИНТРАНЕТ ТЕХНОЛОГИИ / Задачи по работе с файлами
				</div>
			</h2>
			<p>
				Дан файл со словами. Упорядочить слова по алфавиту. Результат записать в другой файл.
			</p>
			<div class="ui section divider"></div>
			<div class="three ui buttons">
				<a class="ui blue left labeled icon button" href="../1/">
					Предыдущая
					<i class="left arrow icon"></i>
				</a>
				<a class="ui teal icon button" href="..">
					<i class="home icon"></i>
				</a>
				<a class="ui blue right labeled icon button" href="../3/">
					Следующая
					<i class="right arrow icon"></i>
				</a>
			</div>
			<div class="ui section divider"></div>
			<div class="ui grid">
				<div class="eight wide column">
					<div class="ui sub header">Содержимое исходного файла</div>
					<br>
					<div class="ui fluid input">
						<textarea rows="20" style="resize: none;width: 100%;border-bottom-right-radius: 0;border-bottom-left-radius: 0;" id="data">
<?php
$fr = fopen('result.txt', 'wt');
$fd = fopen('data.txt', 'rt');
$arr = [];
if ($fd && $fr) {
	while (!feof($fd)) {
		$mytext = fgets($fd, 999);
		echo $mytext;
		array_push($arr, $mytext);
	}
} else echo "Ошибка при открытии файла";
sort($arr);
foreach ($arr as $v) {
	fputs($fr, $v);
}
fclose($fd);
fclose($fr);
?></textarea>
					</div>
					<button class="ui bottom attached icon fluid button" onclick="save();">
						<i class="save icon"></i> Сохранить и отсортировать
					</button>
				</div>
				<div class="eight wide column">
					<div class="ui sub header">Содержимое отсортированного файла</div>
					<br>
					<div class="ui fluid input">
						<textarea rows="20" style="resize: none;width: 100%;" id="result" readonly>
<?php
foreach ($arr as $v) {
	echo $v;
}
?></textarea>
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
		$("#data").html($.trim($("#data").val()));
		$("#result").html($.trim($("#result").val()));

		function save() {
			$.post("index.php", {
				"data": $("#data").val() + "\n"
			});
			location.href = '.';
		}
	</script>
</body>

</html>