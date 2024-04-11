<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODAL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/styles.css">

</head>
<style>
    body{
        background-image: url(../images/fondo1.jpeg);
    }
</style>

<body>
<h1 class="text-center">modal</h1>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  INSCRIBITE CON EL 50% DE DESCUENTO
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




      <form>
  
    <legend>INSCRIBETE GRATIS</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NOMBRE</label>
      <input type="text" id="disabledTextInput" class="form-control">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">APELLIDOS</label>
      <input type="text" id="disabledTextInput" class="form-control" >
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">CATALOGO</label>
      <input type="number" id="disabledTextInput" class="form-control" >
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">ARMA</label>
      <input type="text" id="disabledTextInput" class="form-control">
    </div>
   
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
 
</form>






























      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>













</body>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>