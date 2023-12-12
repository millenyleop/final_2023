<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicalGroup - Clínica Médica</title>
    <style>
     

     body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://github.com/millenyleop/QUSE-LA-MEDICAL-GROUP-PENULTIMA-VERSAO/blob/main/fundo1.jpg?raw=true');
            background-size: cover; 
            background-position: center;
        }

        header {
            background-color:black;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        header nav {
            display: flex;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        header nav a:hover {
            background-color: #555;
        }

        section {
            margin: 20px;
        }

        .consulta {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            padding: 15px;
        }

        .consulta h2 {
            color: #333;
        }

        .consulta p {
            color: #555;
        }

        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: bottom;
            bottom: 0;
            width: 100%;
        }

      
    </style>
</head>
<body>
    <header>
        <h1>MedicalGroup</h1>
        <nav>
            <a href="tela_inicial1.php">Home</a>
            <a href="contato_localização.php">Localização</a>
            <a href="contato_localização.php">Contato</a>
            <a href="adm.php">Sair</a>
        </nav>
    </header>

    <section>
        <div class="consulta">
            <h2>Consulta com Dr. Silva</h2>
            <p>Data: 10 de dezembro de 2023</p>
            <p>Horário: 15:30</p>
            <p>Local: Sala 102</p>
            <p>Observações: Paciente com sintomas gripais.</p>
        </div>

        <div class="consulta">
            <h2>Consulta com Dra. Pereira</h2>
            <p>Data: 15 de dezembro de 2023</p>
            <p>Horário: 09:45</p>
            <p>Local: Sala 105</p>
            <p>Observações: Acompanhamento de rotina.</p>
        </div>

        <div class="consulta">
            <h2>Consulta com Dra. Mendes</h2>
            <p>Data: 18 de dezembro de 2023</p>
            <p>Horário: 16:30</p>
            <p>Local: Sala 107</p>
            <p>Observações: Paciente com sintomas de diabetes.</p>
        </div>

        <div class="consulta">
            <h2>Consulta com Dra. Almeida</h2>
            <p>Data: 27 de dezembro de 2023</p>
            <p>Horário: 10:45</p>
            <p>Local: Sala 90</p>
            <p>Observações: Paciente com sintomas de dengue.</p>
        </div>
    </section>

  
    <footer>
        <p>&copy; 2023 Clínica Médica XYZ</p>
    </footer>

    <script>document.addEventListener("DOMContentLoaded", function () {
        // Função para criar os botões de ação
        function criarBotoesAcao(consultaId) {
            const botoesAcao = document.createElement("div");
            botoesAcao.classList.add("botoes-acao");
    
            const botaoEditar = document.createElement("button");
            botaoEditar.innerText = "Editar";
            botaoEditar.addEventListener("click", function () {
                editarConsulta(consultaId);
            });
    
            const botaoExcluir = document.createElement("button");
            botaoExcluir.innerText = "Excluir";
            botaoExcluir.addEventListener("click", function () {
                excluirConsulta(consultaId);
            });
    
            botoesAcao.appendChild(botaoEditar);
            botoesAcao.appendChild(botaoExcluir);
    
            return botoesAcao;
        }
    
        // Função para editar uma consulta
        window.editarConsulta = function (consultaId) {
            // Implemente a lógica de edição aqui
            alert("Editar consulta com ID: " + consultaId);
        };
    
        // Função para excluir uma consulta
        window.excluirConsulta = function (consultaId) {
            // Implemente a lógica de exclusão aqui
            alert("Excluir consulta com ID: " + consultaId);
        };
    
        // Adicionar botões de ação para cada consulta
        const consultas = document.querySelectorAll(".consulta");
        consultas.forEach(function (consulta, index) {
            const consultaId = "consulta" + (index + 1);
            const botoesAcao = criarBotoesAcao(consultaId);
            consulta.appendChild(botoesAcao);
        });
    });
    
    </script>

</body>
</html>
