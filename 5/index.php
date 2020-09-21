<?php
if ($_POST['name']) {
  $fr = fopen('comments.txt', 'at');
  if ($fr) {
    fputs($fr, "\n");
    fputs($fr, $_POST['name']);
    fputs($fr, "\n");
    fputs($fr, $_POST['email']);
    fputs($fr, "\n");
    fputs($fr, date('Y/m/d - H:i'));
    fputs($fr, "\n");
    fputs($fr, $_POST['text']);
    fputs($fr, "\n");
  } else echo "Ошибка при открытии файла";
  fclose($fr);
}
?>

<html>

<head>
  <meta charset="UTF-8" />
  <title>Задачи по работе с файлами - ИИТ 04.09</title>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css" />
  <script src="../semantic/dist/semantic.min.js"></script>
</head>

<body>
  <div class="ui container" style="max-width: 768px; padding: 3rem 0">
    <div class="ui very padded segment">
      <h2 class="ui header">
        Задача 5
        <div class="sub header">
          ИНТЕРНЕТ И ИНТРАНЕТ ТЕХНОЛОГИИ / Задачи по работе с файлами
        </div>
      </h2>
      <p>
        Написать гостевую книгу. Пользователи указывают свой e-mail и текст сообщения. При отображении на сайте сообщений пользователей указывается дата написания текста. Для хранения сообщений использовать файлы.
      </p>
      <div class="ui section divider"></div>
      <div class="three ui buttons">
        <a class="ui blue left labeled icon button" href="../4/">
          Предыдущая
          <i class="left arrow icon"></i>
        </a>
        <a class="ui teal icon button" href="..">
          <i class="home icon"></i>
        </a>
        <a class="ui blue right labeled icon disabled button" href="../6/">
          Следующая
          <i class="right arrow icon"></i>
        </a>
      </div>
      <div class="ui section divider"></div>
      <h3 class="ui header">Новый комментарий</h3>
      <form class="ui form" action="index.php" method="post">
        <div class="two fields">
          <div class="field">
            <label>Имя пользователя</label>
            <input type="text" name="name" placeholder="Имя пользователя...">
          </div>
          <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email...">
          </div>
        </div>
        <div class="field">
          <label>Комментарий</label>
          <textarea name="text" placeholder="Комментарий..."></textarea>
        </div>
        <button class="ui button" type="submit">Отправить</button>
      </form>
      <div class="ui section divider"></div>
      <h3 class="ui header">Комментарии</h3>
      <div class="ui comments">
        <?php
        $comments = [];
        $fd = fopen('comments.txt', 'rt');
        if ($fd) {
          $i = 0;
          $name = '';
          $date = '';
          $text = '';
          while (!feof($fd)) {
            $mytext = fgets($fd, 999);
            if ($mytext == "\n" || $mytext == "") {
              array_push($comments, array(
                'name' => $name,
                'date' => $date,
                'text' => $text
              ));
              $i = -1;
            }
            switch ($i) {
              case 0:
                $name = $mytext;
                break;
              case 1:
                break;
              case 2:
                $date = $mytext;
                break;
              case 3:
                $text = $mytext;
                break;
              default:
                $text = $text . $mytext;
                break;
            }
            $i++;
          }
        } else echo "Ошибка при открытии файла";
        fclose($fd);
        foreach ($comments as $comment) {
          //var_dump($comment);
          echo "
          <div class='comment'>
            <div class='content'>
              <a class='author'>{$comment['name']}</a>
              <div class='metadata'>
                <div class='date'>{$comment['date']}</div>
              </div>
              <div class='text'>
                {$comment['text']}
              </div>
            </div>
          </div>
          ";
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>