<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="form-group">
<form class="form-horizontal" action"registro" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Registro de casos</legend></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Usuario</label>
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Tipo de Falla</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
      <option value="">Option two</option>
      <option value="">Option two</option>
      <option value="">Option two</option>
      <option value="">Option two</option>
      <option value="">Option two</option>
      <option value="">v</option>
      <option value="">vOption two</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Departamento Encargado</label>
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Observación</label>
  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="textarea">Descripción detallada de la falla..</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">


  <div class="col-md-8">

<div class="col-md-8"></div>
    <button id="button1id" type="submit" name="button1id" class="btn btn-success">ENVIAR</button>
    <button id="button2id" type="reset" name="button2id" class="btn btn-danger">LIMPIAR</button>

  </div>
</div>

</fieldset>
</form>
</div>
</body>
</html>