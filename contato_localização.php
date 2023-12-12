<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localização e Contato</title>
</head>
<body>
    <header>
        <b>
    <nav>
        <div class="menu">
            <div class="logo"><a href="">MedicalGroup</a></div>
            <ul>
                <li><a href="tela_inicial1.php">Home</a></li>
                <li><a href="Medico_paciente3.php">Login</a></li>
                <li><a href="Medico_paciente4.php">Cadastro</a></li>
                <li><a href="tela_inicial1.php">Sair</a></li>
            </ul>
        </div>
    
    </b>
    </header>


    <div class="container">
        <div class="box">
            <div class="form sign_in">
               
               
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.145993884766!2d-47.26557772587573!3d-22.834087535274627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8bd1ab1fc77f3%3A0xf2ff0cd47cdcb7d8!2sEscola%20Senai%20Celso%20Charuri!5e0!3m2!1spt-BR!2sbr!4v1702385137195!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               

               
            </div>
   
            <div class="form sign_up">
               
                <div class="contact">
                    <h3>Informações de Contato</h3>
                    <p>Endereço: R. Amazonas, 99 - Jardim Conceicao (Nova Veneza)</p>
                    <p>Cidade: Sumaré - SP</p>
                    <p>CEP: 13177-060</p>
                    <p>Telefone: (19) 3838-9711</p>
                    <p>Email: contato@clinicamedica.com</p>
                </div>
               
                <div class="contact">
                    <br>
                    <h3>Horário de Funcionamento</h3>
                    <p>Segunda a Sexta: 8:00 - 18:00</p>
                    <p>Sábado: 9:00 - 12:00</p>
                    <p>Domingo: Fechado</p>
                </div>
            </div>
        </div>

        <div class="overlay">
            <div class="page page_signIn">
                <h3>Localização</h3>
                <p>Localização via google maps</p>

                <button class="btn btnSign-in">Contato <i class="bi bi-arrow-right"></i></button>
            </div>

            <div class="page page_signUp">
                <h3>Contato</h3>
                <p>Entre em contato com qualquer pergunta, duvidas ou sugestões</p>
               
                <button class="btn btnSign-up">
                    <i class="bi bi-arrow-left"></i> Localização</button>
            </div>
        </div>
    </div>
   
</nav>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
  }


body {
   
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    background-color: #fff;
    font-family: 'Poppins',sans-serif;
    background-image: url(fundo1.png);
    background-repeat: no-repeat;
    background-size: cover;
}



.container {
    width: 70%;
    display: flex;
    height: 500px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    border-radius: 10px;
    overflow: hidden;
    margin-top: 50px;
}

.container .box {
    position: relative;
    display: flex;
    height: 100%;
    width: 50%;
    transition: all 0.8s;
    transform: translateX(0);
    background-color: #fff;
    z-index: 1;
    overflow: hidden;
}


.container.active .box {
    transform: translateX(100%);
}

.container .box .form {
    position: absolute;
    height: 100%;
    min-width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.container .box .form.sign_up {
    transition: all 0.5s;
    opacity: 0;
    transform: translateX(-100%);
}

.container .box .form.sign_up {
    transition: all 1.15s;
    z-index: 1;
    opacity: 0;
    background-color: #fff;
}

.container .box .form.sign_in {
    opacity: 1;
    transition: all 1.15s;
    z-index: 5;
    background-color: #fff;
}

.container.active .box .form.sign_in {
    z-index: 1;
    opacity: 0;
}

.container.active .box .form.sign_up {
    z-index: 5;
    opacity: 1;
}

.container.active .box .form.sign_up {
     opacity: 1;
    transform: translateX(0%);
}

.container .box .form.sign_in {
    transition: all 0.5s;
    opacity: 1;
    transform: translateX(0%);
}

.container.active .box .form.sign_in {
     opacity: 0;
    transform: translateX(100%);
}

.container .overlay {
    display: flex;
    height: 100%;
    width: 50%;
    transition: all 0.8s;
    transform: translateX(0);
    background-color: #27274B;
    z-index: 1;
    overflow: hidden;
    z-index: 5;
    opacity: 1;
}

.container.active .overlay {
    transform: translateX(-100%);
}

.container .overlay .page {
    height: 100%;
    min-width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    transition: all 0.5s;
    opacity: 1;
}

.container.active .overlay .page.page_signIn {
    opacity: 0;
    margin-left: -100%;
}

.container.active .overlay .page.page_signUp {
    margin-left: 0%;
}


.overlay .page h3 {
    color: #fff;
    font-size: 40px;
    margin-bottom: 15px;
}

.overlay .page p {
    color: #fff;
    font-weight: 600;
    margin-bottom: 20px;
    font-size: 17px;
}

.btn {
    display: inline-block;
    outline: none;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 550;
    background-color: transparent;
    padding: 12px 45px;
    border-radius: 22px;
    border: 1.5px solid #fff;
    cursor: pointer;
}

.form h3 {
    color: #222;
    font-size: 40px;
}



#form_input .type {
    width: 330px;
    height: 48px;
    background-color: #EEEDEF;
    margin: 30px 0;
}

#form_input .type input {
    width: 100%;
    height: 100%;
    padding: 0 10px;
    font-size: 16px;
    border: none;
    outline: none;
    background-color: transparent;
}

#form_input .type input::placeholder {
    color: #A9A8A9;
}

#form_input .forgot {
    margin-bottom: 20px;
    font-weight: 500;
}


nav {
    position: absolute;
    background: #1b1b1b;
    width: 100%;
    padding: 10px 0;
    z-index: 1000;
    margin-top: -400px;
    left: 0px;
    font-family: 'Poppins',sans-serif;
}

nav .menu {
    max-width: 1250px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 12px;
 
}

.menu .logo a {
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 600;
}

.menu ul {
    display: inline-flex;
}

.menu ul li {
    list-style: none;
    margin: 8px;
}

.menu ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    padding: 7px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    font-family: 'Poppins',sans-serif;
}

.menu ul li a:hover {
    background: #fff;
    color: #000;
}
    </style>
    <script>
        const container = document.querySelector('.container')
const btnSignIn = document.querySelector('.btnSign-in')
const btnSignUp = document.querySelector('.btnSign-up')

btnSignIn.addEventListener('click', () => {
    container.classList.add('active')
})

btnSignUp.addEventListener('click', () => {
    container.classList.remove('active')
})
    </script>
</body>
</html>