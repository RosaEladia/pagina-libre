<?php include('head.php');?>
<html>
<head>
<meta charset="utf-8">
<title>formulario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
.center {
  margin: auto;
  width: 30%;
  border: 5px solid #2B2863;
  padding: 5px;
}
</style>
</head>
<div class="center">
<font  color="#286355"  face=" Comic Sans MS">
<h2 align= "center"><p><b>Adopción</b></p></h2>
</div>
</head>
<body>
<Form form name="contact" method="POST" data-netlify="true">
<input type="hidden" name="form-name" value="contact">

<div class="container">
<font  color="#090909"  face="Rockwell">
 <h5><br><p><b>Si tienes la oportunidad de ser candidato para adoptar a una mascota, puedes postularte recuerda que los animalitos necesitan una familia y un hogar </b></p></h5>
  <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="apellido">Apellidos:</label>
      <input type="text" class="form-control" id="apellido" placeholder="Escriba su apellido(comenzando por apellido paterno)" name="apellido" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Complte este campo.</div>
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Escriba su nombre" name="nombre" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Complte este campo.</div>
    </div>
   <div class="form-group">
      <label for="edad">Edad:</label>
      <input type="text" class="form-control" id="edad" placeholder="Ingrese su Edad" name="edad" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Complte este campo.</div>
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="text" class="form-control" id="email" placeholder="Ingrese su correo" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Complte este campo.</div>
    </div>
    <div class="form-group">
      <label for="Telefono">Telefono</label>
      <input type="text" class="form-control" id="Telefono" placeholder="ingrese su numero telefonico, (10 digitos)" name="Telefono" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Complete este campo.</div>
    </div>
    <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="remember"> Recuerdame 
      </label>
    </div>  
    <div class="form-group">
      <label for="direccion">Dirección:</label>
      <input type="text" class="form-control" id="direccion" placeholder="Ingrese su Dirección" name="direccion" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Complete este campo.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="compromiso" required> Cuento con los recursos necesarios para tener una mascota.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Campo obligatorio.</div><br><br>
      </label>
    <button type="submit" class="btn btn-primary">Enviar</button>
    
  </form>
</div>
</Form>
</body>
</html>
<?php include('footer.php');?>

   
