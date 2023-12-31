<!DOCTYPE html>
<html>
  <head>
    <title> System </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
    <body>
      <div class = "wrapper" id = "loginContainer">
        <form action="">
          <h1>Admin Panel</h1>
          <div class = "input-box">
            <input type="text" placeholder="Username" id = "username">
            <i class = 'bx bxs-user'></i>
          </div>
          <div class = "input-box">
            <input type="password" placeholder="Password" id = "password">
            <i class = 'bx bxs-lock-alt'></i>
          </div>
          <button type ="submit" class = "btn" id = "loginButton">Login</button>
        </form>
      </div>
      <div id="adminPanelContent" style="display: none;">
        
      <p class = "welcome-text">
        Welcome to the System!
      </p>
      <button id="createNewPageButton" class = "createNewPageButton">Статистика</button>
      <div class = "container">
      <input type="text" placeholder="Введите количество людей" class="howManyPeople" id="howManyPeopleInput">
      <button class="accept" id="js-accept">Принять</button>        
      <div class = "js-howManyHours" id = "js-howManyHours"> </div>
      <button class="delete-btn" id="js-delete-btn"> Удалить всё </button>
      </div>
      <script src = "{{ asset('js/script.js') }}"></script>
    </div>
    </body>
</html>