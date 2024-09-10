<?php
$titulo = "Cadastro";
require("./include/header.php");
?>
<body>
    <div class="loginContainer">
        <div class="container">
            <img src="assets/logo_astolfo.png" alt="cadastro">
            <form id="loginForme">
              <label for="username">nome</label>
                  <input type="text"id="nome" name = "nome" required>
                  <label for="login">Login</label>
                  <input type="text" id= "senha" name="senha" required>
                  <label for="password">password</label>
                  <input type="password" id= "password" name="password" required>
                  <label for="email">email</label>
                  <input type="text"id= "email" name= "email" required>
                  <div class="acessos">
                    <a href="SiteLogin.html">
                        <button type="submit">voltar</button>
                      </a>
                      <button type="submit">salvar</button>
                  </div>
            </form>
          </div>
          <div class="jopo">
            <label for="foto">upload de foto</label>
            <input type="file" name = "foto" accept="image/*">
          </div>
    </div>
</body>
</html>