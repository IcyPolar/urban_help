<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: whitesmoke;
        }
        
        DIV.container {
            min-height: 10em;
            display: table-cell;
            vertical-align: middle
        }
        
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="password"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        
        input[type="submit"],
        button {
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
        
        button {
            background-color: #337ab7;
        }
        
        input[type="submit"]:hover,
        button:hover {
            background-color: #3e8e41;
        }
        
        input[type="submit"]:active,
        button:active {
            background-color: #235723;
        }
    </style>
</head>

<body>
    <form action="">

        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username"> <label for="password">Senha:</label>
        <input type="password" id="password" name="password">

        <table>
            <tr>
                <td colspan="5"><input type="radio" id="cliente" name="escolhauser" value="clienteoption">
                    <label for="cliente">Cliente</label></td>
                <td colspan="1">
                    <input type="radio" id="trabalhador" name="escolhauser" value="trabalhadoroption">
                    <label for="css">Trabalhador</label>
                </td>

            </tr>
        </table>




        <table align="center">

            <tr>
                <td colspan="3"><button type="button" onclick="criarContatra()">Criar conta Trabalhador</button></td>
                <td rowspan="6">
                    <DIV class="container">
                        <img class="img" width="200" height="200" src="D:\javascript\urban_help\Screenshot_1.png" />
                    </DIV>
                </td>
            </tr>
            <tr>
                <td colspan="3"><button type="button" onclick="criarContacli()">Criar conta Cliente</button></td>
            </tr>
            <tr></tr>
            <td colspan="3"><input type="submit" value="Login"></td>
            </tr>
        </table>



    </form>

    < !-- <script>
        function validarCredenciais() { // Lógica de validação das credenciais de login aqui // Verifica se as credenciais de login são válidas var username = document.getElementById("username").value; var password = document.getElementById("password").value;
        if (localStorage.getItem(username) === password) { return true; // Retorna verdadeiro se as credenciais forem válidas } else { return false; // Retorna falso caso contrário } } function criarContatra() { window.open('D:\\javascript\\urban_help\\trabalhador.html');
        /*var username = prompt("Digite um nome de usuário:"); var password = prompt("Digite uma senha:"); localStorage.setItem(username, password); alert("Conta criada com sucesso!");/**/ } function criarContacli() { window.open('D:\\javascript\\urban_help\\usuario.html');
        /*var username = prompt("Digite um nome de usuário:"); var password = prompt("Digite uma senha:"); localStorage.setItem(username, password); alert("Conta criada com sucesso!");*/ } document.querySelector('form').addEventListener('submit', function(event)
        { event.preventDefault(); // Impede que o formulário seja enviado // Verifica se as credenciais de login são válidas if (validarCredenciais()) { window.location.href = 'file:///D:\javascript\\urban_help\\site.html'; // Abre o arquivo local } else
        { window.location.href = 'file:///D:\javascript\\urban_help\\site.html'; /*alert('Credenciais de login inválidas'); // Exibe mensagem de erro caso as credenciais não sejam válidas*/ } });
        </script>-- >

</body>

</html>