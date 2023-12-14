<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro</title>

<style>
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(fundo1.png);
            background-repeat: no-repeat;
            background-size: cover;
        
        }

       

        form {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background: transparent;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            position: center; 
            text-align: center;
        }
        input {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #1565c0;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            
        }

        button:hover {
            background-color: #003c8f;
        }
        p {
            margin-top: 10px;
            color: white;
        }
        p.error {
            color: red;
        }
        p.success {
            color: green;
        }
        .button {
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
        .button:hover {
            background-color: #27274B;
        }


label{
  color: white;
}
 
h1{
  color: white;
}

a{ 
  color: blue;
}
</style>
</head>
<?php
//conectar ao banco de dados 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$obj_mysqli = new mysqli("127.0.0.1", "phpmyadmin", "aluno", "administrador");
//verificar conexão
if ($obj_mysqli->connect_errno) {
echo "Ocorreu um erro na conexão com o banco de dados.";
exit;
}
mysqli_set_charset($obj_mysqli, 'utf8');
$erro = $sucesso = "";
// Validando a existência dos dados
if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
if (empty($_POST["nome"])) {
$erro = "Campo nome obrigatório";
} elseif (empty($_POST["email"])) {
$erro = "Campo e-mail obrigatório";
} elseif (empty($_POST["senha"])) {
$erro = "Campo senha obrigatório";
} else {
// realizar o cadastro ou alteração dos dados enviados.
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

//Preparar a tabela para inserir os valores 
$stmt = $obj_mysqli->prepare("INSERT INTO `cliente` (`Nome`,`Email`,`Senha`) VALUES (?,?,?)");
$stmt->bind_param('sss', $nome, $email, $senha);

// mensagem de erro 
if (!$stmt->execute()) {
$erro = "Erro no SQL: " . $stmt->error;
} else {
// mensagem de cadastrado com sucesso  
$sucesso = "Dados cadastrados com sucesso!";
// Caso de sucesso, ir para pagina inicial
header("Location: tela_inicial1.php");
}
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cadastro</title>
</head>
<body>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container" >
        <a class="links" id="paracadastro"></a>
        <br>
        <div class="content">      
          <center><div id="cadastro">
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
              <h1>Cadastro</h1> 
              <p> 
                <label for="nome_cad">Seu nome</label>
                <input type="text" name="nome" placeholder="Qual seu nome?"><br/>
              </p>
              <p> 
                <label for="email_cad">Seu e-mail</label>
                <input type="email" name="email" placeholder="Qual seu e-mail?"><br/> 
              </p>
              <p> 
                <label for="senha_cad">Sua senha</label>
                <input type="password" name="senha" placeholder="Qual sua senha?"><br/>
              </p>
              <?php if(isset($erro)) { echo "<p style='color:red'>$erro</p>"; } ?>
              <?php if(isset($sucesso)) { echo "<p style='color:green'>$sucesso</p>"; } ?>
              <p> 
                <input type="hidden" value="-1" name="id">
                
                <input type="submit" value="Cadastrar"/> 
              </p>
              <p class="link">  
                Já tem conta?
                <a href="logout.php"> Ir para Login </a>
              </p></div>
            </form></center>
</body>
</html>
