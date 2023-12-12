<html>
  <head>
    <title> Medico_paciente </title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI',
  
}
::selection{
  color: #000;
  background: #fff;
  text-decoration:none;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
  text-decoration:none;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
  text-decoration:none;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url('6.jpg')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
  text-decoration:none;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
  text-decoration:none;
}
.center .sub_title{
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  text-decoration:none;
}
.center .btns{
  margin-top: 20px;
  text-decoration:none;
}
.center .btns button{
  height: 55px;
  width: 170px;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
  text-decoration:none;
}
.center .btns button:first-child{
  color: #fff;
  background: white;
  text-decoration:none;
}
.btns button:first-child:hover{
  background: white;
  color: black;
  text-decoration:none;
}
.center .btns button:last-child{
  background: white;
  color: rgb(22, 22, 22);
  text-decoration:none;
}
.texto{
  text-decoration: none;
  background: white;
  color: white;
}

    </style>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Medical Group</a>
      </div>
      <ul>
        <li><a href="tela_inicial1.php">Início</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title"> Logar como? </div>
    <div class="btns">
      <button class="texto"><a href="loginmedico.php">Médico</a></button>
      <button class="texto"><a href="index.php">Paciente</a></button>
      <button class="texto"><a href="loginadm.php">Administrador</a></button>
    </div>
  </div>
</body>
</html>
