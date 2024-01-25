<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="style.css">
<!-- Script for Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container" id="home">
        <header>
            <nav>
                <div class="left-nav">
                    <a href="contato_localização.php" target="_blank">Contato</a>
                    <a href="contato_localização.php">Localização</a>
                    <a href="Medico_paciente3.php">Login</a>
                    <a href="Medico_paciente4.php">Cadastro</a>
                </div>
                <div class="mid-nav">
                    <a href="https://youtube.com" target="_blank">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                    <a href="https://instagram.com" target="_blank">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="https://github.com" target="_blank">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </div>
                <div class="right-nav">
                    <a href="#footer">
                        <img src="logo.png" alt="Photo of Atticus Nightshade">
                    </a>
                </div>
            </nav>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');

html {
    scroll-behavior: smooth;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
}

.container {
    background: linear-gradient(rgba(0, 0, 0, 0.3),rgba(7, 58, 134, 0.6)),url(bg.jpg);
    height: 100vh;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

nav {
    display: flex;
    align-items: center;
    padding: 1rem 3rem 0 3rem;
    justify-content: space-between;
    font-size: 25px;
}

nav a {
    text-decoration: none;
    color: white;
    padding-inline: 1rem;
}

a:hover {
    opacity: 0.7;
}

.left-nav {
    display: flex;
}

.mid-nav a {
    font-size: 1.25rem;
}

.right-nav img {
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
}

.mid-info {
    color: white;
    padding: 10rem 5rem 0 5rem;
}

.name {
    font-size: 7rem;
    text-transform: uppercase;
    line-height: 1;
}

.name span {
    font-weight: 900;
    letter-spacing: 2px;
}

.work {
    letter-spacing: 7px;
    font-size: 25px;
}

.sec-des {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #f9fafb;
    color: rgb(34, 101, 194);
    display: flex;
    align-items: center;
    padding: 9rem 7.5rem;
    justify-content: space-between;
}

.sec-des-left {
    width: 50ch;
}

.sec-des p {
    line-height: 2;
}

h3 {
    font-size: 3rem;
    color: #0000FF;
}

.sec-des img {
    width: 30vw;
    border-radius: 50%;
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}

.exp {
    padding: 10.1rem 7.5rem;
    background: #0c0909;
    color: #fff;
}

.exp h3 {
    background: #0c0909;
    color: #fff;
}

.exp img {
    border-radius: 10px;
    width: 30vw;
}

.exp-left {
    order: 2;
}

.contact {
    padding: 9rem 7.5rem;
    color: rgb(34, 194, 178);
}

.contact > p {
    color: black;
}

h2 {
    font-size: 10rem;
}

.free {
    font-weight: 600;
    text-decoration: underline;
}

.contact-text1 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.email {
    font-weight: 600;
    font-size: 1.25rem;
}

hr {
    width: 95vw;
    margin: 0 auto;
}

footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 2.5rem;
    color: rgb(34, 61, 194);
}

footer a {
    text-decoration: none;
    padding-inline: 1.25rem;
    color: rgb(34, 39, 194);
}

footer p {
    font-weight: 500;
    cursor: pointer;
}
            </style>
        </header>
        <section>
            <div class="mid-info">
                <div class="name">Medical <br>
                    <span>Group</span>
                </div>
                <div class="work">Clínica Médica</div>
            </div>
        </section>
    </div>
    <section class="sec-des" id="about">
        <div class="sec-des-left">
            <h3>Sobre Nós</h3>
            <p>
                Bem-vindo à nossa Clínica Médica, onde sua saúde é nossa prioridade! Oferecemos um ambiente acolhedor e profissionais dedicados, prontos para cuidar de você em todas as fases da vida. Com uma equipe qualificada e instalações modernas, garantimos atendimento personalizado e eficiente em diversas especialidades médicas.

Na busca pela sua saúde e bem-estar, contamos com tecnologia de ponta para diagnósticos precisos e tratamentos eficazes. Nosso compromisso é proporcionar uma experiência positiva, focada em resultados e no cuidado integral do paciente.
            </p>
        </div>
        <img src="pic1.jpg" alt="A Photo of Nightshade">
    </section>
    <section class="sec-des exp" id="experience">
        <div class="sec-des-left exp-left">
            <h3>Experiência</h3>
            <p>
                Marque sua consulta e faça parte da nossa comunidade que valoriza a saúde como um bem precioso. Na Clínica Médica, estamos aqui para transformar sua jornada de cuidados de saúde em uma experiência confiável e acolhedora. Sua saúde merece toda a atenção, e nós estamos prontos para oferecer o melhor para você e sua família.            </p>
        </div>
        <img src="pic2.jpg" alt="A Photo of Nightshade">
    </section>
    <section class="contact" id="contact">
        <h2>Contato</h2>
        <p class="contact-text1">
            E-mail: contato@clinicavitalsaude.com.br<span class="free"> Contato 24 horas</span>.
        </p>
        <p class="email">
            Telefone: (11) 1234-5678
        </p>
    </section>
    <hr>
    <footer id="footer">
        <div class="left-nav">
            <a href="#home" target="_blank">Home</a>
            <a href="#about">Sobre</a>
            <a href="#experience">Experiencia</a>
            <a href="#contact">Contato</a>
        </div>
        <div class="right-nav">
            <a href="#home">Medical Group</a>
        </div>
    </footer>
</body>
</html>
