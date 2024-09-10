<?php
$titulo = "Login";
require("./include/header.php");
?>
<body>
    <div class="loginContainer">
        <div class="container">
            <img src="assets/logo_astolfo.png" alt="cadastro">
            <form id="loginForme">
              <label for="username">username</label>
                  <input type="text"id="username" name = "username" required>
                  <label for="password">password</label>
                  <input type="password" id= "password" name="password"required>
                  <button type="submit">entrar</button>
            </form>
          </div>
          <a href="Cadastrese.html"></a>
    </div>
</body>
</html>