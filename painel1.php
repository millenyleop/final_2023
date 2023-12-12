<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Administrador </title>
   </head> 
    <script>
      document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: [
        // Coloque os eventos da agenda aqui (data, horário, etc.).
      ],
      dateClick: function (info) {
        showAppointmentForm(info.dateStr);
      }
    });
    calendar.render();
  });
  
  function showAppointmentForm(date) {
    const form = document.getElementById('appointmentForm');
    const dateInput = document.getElementById('date');
    const timeInput = document.getElementById('time');
  
    dateInput.value = date;
    timeInput.value = '';
  
    form.style.display = 'block';
  }
  
  function scheduleAppointment() {
    const dateInput = document.getElementById('date');
    const timeInput = document.getElementById('time');
  
    const date = dateInput.value;
    const time = timeInput.value;
  
    if (date && time) {
      // Adicione a lógica para salvar a consulta no backend ou no armazenamento local.
      // Atualize o array de eventos do calendário.
      // Por exemplo:
      const calendar = document.getElementById('calendar').__fullCalendar;
      calendar.addEvent({ title: 'Consulta', start: `${date}T${time}` });
  
      // Limpe o formulário e oculte-o.
      dateInput.value = '';
      timeInput.value = '';
      document.getElementById('appointmentForm').style.display = 'none';
    } else {
      alert('Por favor, preencha todos os campos.');
    }
  }
    </script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 12px;
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
  margin: 8px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding: 7px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: #000;
}
.img{
  background: url(fundo1.jpg) no-repeat;
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
  background: rgba(0,0,0,0.4);
}
.center{
  position: absolute;
  top: 52%;
  left:50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 50px;
  font-weight: 600;
}
.center .buttns{
  margin-top: 20px;
}
.center .buttns button{
   height: 55px;
   width: 150px;
   border-radius: 5px;
   border: none;
   margin: 0 10px;
   border: 2px solid #fff;
   font-size: 20px;
   font-weight: 500;
   padding:  0 10px;
   cursor: pointer;
   outline: none;
   transition: all 0.3s ease;
   background-color: white:
}
.center .buttns button:first-child{
  color: #fff;
  background-color: white:
}
.buttns button:first-child:hover{
  background-color: white:
  color: #000;
}
.center .buttns button:last-child{
  background-color: white:
  color: #000;
}
    </style>
  
  <body>
    <nav>
      <div class="menu">
        <div class="logo"><a href="">MedicalGroup</a></div>
        <ul>
          <li><a href="tela_inicial1.php">Home</a></li>
          <li><a href="contato_localização.php">Localização</a></li>
          <li><a href="contato_localização.php">Contato</a></li>
          <li><a href="tela_inicial1.php">Sair</a></li>
        </ul>
      </div>
      <div class="img"></div>
      <div class="center">
        <div class="title">Bem-Vindo</div>
        <div class="sub_title">Paciente</div>
        <div class="buttns">
        <button><a href="agendamentos.php">Agendar</a></button>
        <button><a href="tela_inicial1.php">Sair</a</button>
      </div>
      </div>
      
    </nav>
  </body>
  

</html>