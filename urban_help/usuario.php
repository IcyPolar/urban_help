<!DOCTYPE html>
<html>
  <head>
    <title>Login para Cliente</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
        background-image: url("D:\\javascript\\urban_help\\imgmapa.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      form {
        max-width: 400px;
        margin: 100px auto;
        background-color: #878787;
        border-radius: 5px;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        color: whitesmoke;
      }
      label {
        display: block;
        margin-bottom: 5px;
      }
      input[type="text"],
      input[type="email"],
      input[type="password"],
      input[type="tel"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }
      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      input[type="submit"]:active {
        background-color: #235723;
      }
    </style>
  </head>
  <body>
    <form>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <input type="submit" value="Login">
    </form>
  </body>
</html>
