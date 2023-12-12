<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('fundo1.png');
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        form {
    position: relative;
    width: 400px; /* ou o valor desejado */
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    flex-direction: column; /* Alteração para empilhar os itens verticalmente */
    justify-content: center;
    align-items: center;
    margin: 300px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 8px;
}



        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 36px;
            color: #fff;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            text-decoration: none;
           
        }

        input[type="submit"] {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #27274B;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin: 10px;
        }

        .button {
            width: auto;
            padding: 10px 18px;
            background-color: #27274B;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }
    </style>
</head>

<body>

    <form method="post" action="loginmedico.php">
        <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br>

        <input type="submit" value="Login">
        <a href="logout.php" class="button">Sair</a>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Configurações do banco de dados
        $host = 'localhost';
        $username = 'phpmyadmin';
        $password = 'aluno';
        $database = 'Medicos';

        // Conectar ao banco de dados
        $conn = new mysqli($host, $username, $password, $database);

        // Verificar a conexão
        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Receber os dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consultar o banco de dados para verificar as credenciais
        $query = "SELECT * FROM Cliente WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            // Login bem-sucedido
            echo "Login bem-sucedido!";
            session_start();
            $_SESSION['email'] = $email;
            header("Location: painel.php");
            exit(); // Certifique-se de sair para evitar que o restante do código seja executado
        } else {
            $sucesso = "Dados cadastrados com sucesso!";
            header("Location: painel.php");
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    }
    ?>

</body>

</html>
