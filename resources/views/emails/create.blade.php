

<div style="width: 100%; height: 100%; display: flex; align-items: center; flex-direction: column; font-family: Arial; ">

<div style="width: 100%;
  height: auto;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  padding: 20px 50px;
  border-radius: 0.35rem;
  background-color: #4e73df !important;
  background-image: linear-gradient(135deg, #4e73df 0%, rgba(128, 57, 218, 0.8) 100%) !important;
  margin-bottom: 20px;">
  
<div style="background-color: white; padding: 30px 20px; border-radius: 50%"> 
<img src="https://raw.githubusercontent.com/felipe97-97/tesis/master/public/emails/logo.png" alt="create" style="width: 15rem;">
</div>
<h1 style="color: white">¡Hola {{$paciente->nombre}}!</h1>
</div>
<img src="https://raw.githubusercontent.com/felipe97-97/tesis/327b4c44e415ce7e2723216e7992ccfc654c1aeb/public/emails/create.svg" alt="create" style="width: 25rem;">
<h2>
  Tienes una hora agendada en Vivadent
</h2>
<p>A continuación te dejamos los detalles...</p>

<div style="background-color: #e8e8e8; padding: 10px 20px; border-radius: 15px ">
  <h3>
    Fecha: {{date('d-m-Y', strtotime($validated['day']))}}
  </h3>
  <h3>
    Hora: {{$validated['start_date']}}
  </h3>
  <h3>
    Dentista: {{$colaborador->nombre.' '.$colaborador->apellido}}
  </h3>
</div>

<h4>Te aconsejamos llegar al menos 10 minutos antes y por supuesto, respetar todas las medidas sanitarias necesarias.</h4>

<h2>¡Te esperamos!</h2>

<div style="width: 100%;
  height: auto;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  padding: 20px 50px;
  border-radius: 0.35rem;
  background-color: #4e73df !important;
  background-image: linear-gradient(135deg, #4e73df 0%, rgba(128, 57, 218, 0.8) 100%) !important;
  margin-top: 30px;">

<p style="color: white">+56 9 5106 2355</p>
<p style="color: white">contactovivadent@gmail.com</p>
<h4 style="color: white">VIVADENT ©, todos los derechos reservados.</h4>
</div>

</div>