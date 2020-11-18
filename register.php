<!doctype html>
<html lang="en">
  <head>
  <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
</head>
  <body class="body">
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container-fluide">
      <div class="row no-gutters m-t-1">
        <div class="col-lg-4 offset-lg-4 form">
          <div class="f">
            <h3 class="text-gray1 align-center width-80 m-l-10"> Регистрация</h3>
            <form method="POST">
                <label for="recipient-name" class="col-form-label">Фамилия, имя, отчество</label>
              <input type="text" class="form-control" id="recipient-name" placeholder="ФИО" required>

              <label for="recipient-name" class="col-form-label">Серия, номер пасспорта</label>
              <input type="text" class="form-control" id="recipient-name"  pattern="\d{4}\s\d{6}" title="Введите Серию и номер" placeholder="Серия, номер пасспорта" required>

              <label for="recipient-name" class="col-form-label">Дата выдачи</label>
              <input type="date" class="form-control" id="recipient-name" placeholder="Дата выдачи" required>

              <label for="index" class="col-form-label">Почтовый индекс</label>
              <input type="text" class="form-control" id="index" pattern="\d{6}" title="Введите 6 цифр" placeholder="Индекс" required>

              <label for="adress" class="col-form-label">Домашний адрес</label>
              <input type="text" class="form-control" id="adress" placeholder="Домашний адрес" required>

              <label for="email" class="col-form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email" required>

              
              <label for="phone" class="col-form-label">Мобильный телефон</label>
              <input type="text" class="form-control" required id="phone" pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$" title="Введите телефон в правильном формате" placeholder="Телефон">

              <label for="psw">Новый пароль</label>
              <input type="password" id="psw" name="psw" class="form-control" placeholder="Пароль" pattern="(?=.*\d)(?=.*[a-z а-я])(?=.*[A-Z А-Я]).{8,}" title="Пароль должен содержать цифры, заглавные и прописные символы, как минимум 8 символов" required>
              <label for="psw2" class="col-form-label">Повторите пароль</label>
              <input type="password" class="form-control" id="psw2" placeholder="Повторите пароль" required>
              <br>
              <button  class="button_green_circle">Зарегистрировться</button>
              <br>
            </form>
            <div>
                <br>
                <p class="m-l-5 t1">Ваш пароль должен содержать:</p>
                <p id="letter" class="invalid t1 m-l-5">прописные буквы</p>
                <p id="capital" class="invalid t1 m-l-5">заглавные буквы</p>
                <p id="number" class="invalid t1 m-l-5">цифры
                <p id="length" class="invalid t1 m-l-5">минимум 8 символов
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");

  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
  }

  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
  }

  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z а-я]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z А-Я]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
</script>



</body>
</html>
