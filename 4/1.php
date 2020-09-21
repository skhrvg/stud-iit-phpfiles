<html>

<head>
  <meta charset="UTF-8" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css" />
  <script src="../semantic/dist/semantic.min.js"></script>
</head>

<body>
  <h3 class="ui header">Вопрос 1/12</h3>
  <p>Какой уровень модели OSI отсутствует в стеке TCP/IP?</p>
  <div class="ui form">
    <div class="grouped fields">
      <div class="field">
        <div class="ui radio checkbox q1">
          <input type="radio" name="a1" tabindex="0" class="hidden">
          <label>Application Layer</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox q1">
          <input type="radio" name="a1" tabindex="1" class="hidden">
          <label>Session Layer</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox q1">
          <input type="radio" name="a1" tabindex="2" class="hidden">
          <label>Transport Layer</label>
        </div>
      </div>
    </div>
  </div>
  <h3 class="ui header">Вопрос 2/12</h3>
  <p>Какой из протоколов принадлежит Network Access Layer стека TCP/IP?</p>
  <div class="ui form">
    <div class="grouped fields">
      <div class="field">
        <div class="ui radio checkbox q2">
          <input type="radio" name="a2" tabindex="0" class="hidden">
          <label>UDP</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox q2">
          <input type="radio" name="a2" tabindex="1" class="hidden">
          <label>IP</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox q2">
          <input type="radio" name="a2" tabindex="2" class="hidden">
          <label>Ethernet</label>
        </div>
      </div>
    </div>
  </div>
  <h3 class="ui header">Вопрос 3/12</h3>
  <p>Сколько уровней в модели OSI?</p>
  <div class="ui form">
    <div class="grouped fields">
      <div class="field">
        <div class="ui radio checkbox q3">
          <input type="radio" name="a3" tabindex="0" class="hidden">
          <label>5</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox q3">
          <input type="radio" name="a3" tabindex="1" class="hidden">
          <label>6</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox q3">
          <input type="radio" name="a3" tabindex="2" class="hidden">
          <label>7</label>
        </div>
      </div>
    </div>
  </div>
  <br>
  <form action="2.php" method="post">
    <input type="text" id="answer1" name="answer1" value="<?php echo $_POST["answer1"] ?>" hidden>
    <input type="text" id="answer2" name="answer2" value="<?php echo $_POST["answer2"] ?>" hidden>
    <input type="text" id="answer3" name="answer3" value="<?php echo $_POST["answer3"] ?>" hidden>
    <input type="text" id="answer4" name="answer4" value="<?php echo $_POST["answer4"] ?>" hidden>
    <input type="text" id="answer5" name="answer5" value="<?php echo $_POST["answer5"] ?>" hidden>
    <input type="text" id="answer6" name="answer6" value="<?php echo $_POST["answer6"] ?>" hidden>
    <input type="text" id="answer7" name="answer7" value="<?php echo $_POST["answer7"] ?>" hidden>
    <input type="text" id="answer8" name="answer8" value="<?php echo $_POST["answer8"] ?>" hidden>
    <input type="text" id="answer9" name="answer9" value="<?php echo $_POST["answer9"] ?>" hidden>
    <input type="text" id="answer10" name="answer10" value="<?php echo $_POST["answer10"] ?>" hidden>
    <input type="text" id="answer11" name="answer11" value="<?php echo $_POST["answer11"] ?>" hidden>
    <input type="text" id="answer12" name="answer12" value="<?php echo $_POST["answer12"] ?>" hidden>
    <button type="submit" class="ui right labeled icon submit button">
      <i class="right arrow icon"></i>
      Далее
    </button>
  </form>
  <script>
    var value
    $('.ui.radio.checkbox.q1')
      .checkbox({
        debug: false,
        fireOnInit: true,
        onChecked: function() {
          value = $(this).parent().find('label').text();
          $("#answer1").val(value);
        },
      });
    $('.ui.radio.checkbox.q2')
      .checkbox({
        debug: false,
        fireOnInit: true,
        onChecked: function() {
          value = $(this).parent().find('label').text();
          $("#answer2").val(value);
        },
      });
    $('.ui.radio.checkbox.q3')
      .checkbox({
        debug: false,
        fireOnInit: true,
        onChecked: function() {
          value = $(this).parent().find('label').text();
          $("#answer3").val(value);
        },
      });
  </script>
</body>

</html>