<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="usuarios.js" href="usuarios.js">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicalGroup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 0;
            background-position: center;
            background-size: cover;
            background-image: url('fundo1.jpg');
            

        }

    
         header {
            background-color:black;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        
        }

        section {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 600px;
            width: 1600px;
        }

        .user-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            border-radius: 5px;
            text-align: center;
            padding-bottom: 200px;
            width: 400px;
            
        }

        .user-card img {
            max-width: 100%;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .h2 {
            color: #333;
            font-size: 30px;
        }

        p {
            color: #666;
            margin: 5px 0;
            font-size: 30px;
        }
        .foto1 {
            width: 150px;
            height: 150px
        }
        .foto2 {
            width: 150px;
            height: 150px
        }
        .foto3 {
            width: 150px;
            height: 150px
        }  
        .foto4 {
            width: 150px;
            height: 150px
        }
        .h1 {
            margin-left: 120px;
        }
        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            position: bottom;
            bottom: 0;
            width: 100%;
        }
        header h1 {
            margin: 0;

        }

        header nav {
            display: flex;
            margin-right: 20px
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;

        }
      
        a{
  color:white;
}
    button {
         border-radius: 15px;
         background-color: #27274b;
         color: white;
         height: 55px;
         width: 90px;
         font-size: 25px;
    }    

    .body{
        background-image: url('https://github.com/millenyleop/QUSE-LA-MEDICAL-GROUP-PENULTIMA-VERSAO/blob/main/fundo1.jpg?raw=true');
    }
    .usercard{
        padding-bottom: 500px
    }

    </style>
</head>
<body>
     <header>
            <h1>MedicalGroup</h1>
            <nav>
                
                <a href="tela_inicial1.php"  class="a">Home</a>
                <a href="contato_localização.php"   class="a">Localização</a> 
                <a href="contato_localização.php"    class="a">Contato</a>
                <a href="adm.php"    class="a">Sair</a>        
            </nav>
        </header>
       
        
    <br>
    <br>
    <section>
        <div class="user-card">
            <img class="foto1" width="150px" src="https://evorastudio.com.br/wp-content/uploads/2021/03/fotos-para-medicos-1.jpg" alt="Foto Dr. João Silva">
            <h2>Dr. João Silva</h2>
            <p>Especialidade: Cardiologia</p>
            <p>CRM: 12345</p>

            <button onclick="editarUsuario()">editar</button> <button onclick="excluirUsuario() ">excluir</button>
        </div>
        


       
        <div class="user-card">
            <img class="foto3"  width="150px"   src="https://vejasp.abril.com.br/wp-content/uploads/2016/12/medico1.jpg?quality=70&strip=info&w=600&h=400&crop=1" alt="Foto Dr. José Santos">
            <h2>Dr. José Santos</h2>
            <p>Especialidade: Ortopedia</p>
            <p>CRM: 54321</p>

            <button onclick="editarUsuario()">editar</button> <button onclick="excluirUsuario() ">excluir</button>
        </div>

        <div class="user-card">
            <img class="foto4" width="90px"     src="https://blog.ipog.edu.br/wp-content/uploads/2017/10/m%C3%A9dico.jpg" alt="Foto Dra. Ana Costa">
            <h2>Dra. Ana Costa</h2>
            <p>Especialidade: Dermatologia</p>
            <p>CRM: 98765</p>

            <button onclick="editarUsuario()">editar</button> <button onclick="excluirUsuario() ">excluir</button>
        </div>
    </section>
   
<br>
<br>
<br>
<br>
    <footer>
        <p>&copy; 2023 Clínica Médica XYZ</p>
    </footer>

    <script >document.addEventListener('DOMContentLoaded', function () {
        // Adiciona um evento de clique ao botão Excluir de cada cartão de usuário
        document.querySelectorAll('.user-card .delete-button').forEach(function (button, index) {
            button.addEventListener('click', function () {
                excluirUsuario(index);
            });
        });
    
        // Adiciona um evento de clique ao botão Editar de cada cartão de usuário
        document.querySelectorAll('.user-card .edit-button').forEach(function (button, index) {
            button.addEventListener('click', function () {
                editarUsuario(index);
            });
        });
    });
    
    function excluirUsuario(index) {
        if (confirm("Tem certeza que deseja excluir este usuário?")) {
            // Adicione aqui a lógica para excluir o usuário com o índice fornecido
            alert("Usuário excluído. Implemente a lógica de exclusão conforme necessário.");
        }
    }
    
    function editarUsuario(index) {
        // Adicione aqui a lógica para editar o usuário com o índice fornecido
        alert("Implemente a lógica de edição conforme necessário.");
    }
    </script>
</body>
</html>