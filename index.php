<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Taller Get</title>
</head>
<body>
<div class="container">
<form action="respuestas.php" method="GET">
  <div class="form-group">
    <label for="exampleInputEmail1">nombre</label>
    <input type="text" name="nombre" class="form-control" id="1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">apellidos</label>
    <input type="text" name="apellidos" class="form-control" id="5" >
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">edad</label>
    <input type="number" name="edad" class="form-control" id="4" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">curso</label>
    <input type="text" name="curso" class="form-control" id="3" >
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>







<script src="./js/jquery-3.6.min.js"></script>
    <script src="./bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>