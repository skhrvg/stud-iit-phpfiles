<html>

<head>
  <meta charset="UTF-8" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css" />
  <script src="../semantic/dist/semantic.min.js"></script>
</head>

<body>
  <?php
  $fd = fopen('answers.txt', 'rt');
  if ($fd) {
    $i = 0;
    while (!feof($fd)) {
      $answers[$i] = fgets($fd, 999);
      $i++;
    }
  } else echo "Ошибка при открытии файла";
  fclose($fd);
  for ($i = 0; $i < 12; $i++) {
    if (strpos($answers[$i], $_POST["answer" . strval($i + 1)]) === false) {
      $results[$i] = '<span style="color:red;">неверно</span>';
    } else {
      $results[$i] = '<span style="color:green;">верно</span>';
    }
  }
  ?>
  <h3 class="ui header">Результат</h3>
  <p>
    <b>Вопрос 1: </b> <?php echo $results[0] ?> <br>
    <b>Вопрос 2: </b> <?php echo $results[1] ?> <br>
    <b>Вопрос 3: </b> <?php echo $results[2] ?> <br>
    <b>Вопрос 4: </b> <?php echo $results[3] ?> <br>
    <b>Вопрос 5: </b> <?php echo $results[4] ?> <br>
    <b>Вопрос 6: </b> <?php echo $results[5] ?> <br>
    <b>Вопрос 7: </b> <?php echo $results[6] ?> <br>
    <b>Вопрос 8: </b> <?php echo $results[7] ?> <br>
    <b>Вопрос 9: </b> <?php echo $results[8] ?> <br>
    <b>Вопрос 10: </b> <?php echo $results[9] ?> <br>
    <b>Вопрос 11: </b> <?php echo $results[10] ?> <br>
    <b>Вопрос 12: </b> <?php echo $results[11] ?> <br>
  </p>
  <br>
  <form action="1.php" method="post">
    <button type="submit" class="ui right labeled icon submit button">
      <i class="refresh icon"></i>
      Начать сначала
    </button>
  </form>
</body>

</html>