<!DOCTYPE html>
<html lang="en">
<head>
  <title>MUSEO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Museo</h4>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Menu
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="#">Idioma</a></li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Idioma <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Español</a></li>
          <li><a tabindex="-1" href="#">Inglés</a></li>
         </ul>
       </li>
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Rol del visitante <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Estándard</a></li>
          <li><a tabindex="-1" href="#">Junior</a></li>
          <li class="dropdown-submenu">
            <a class="test" href="#">Discapacidad <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Visual</a></li>
              <li><a href="#">De movilidad</a></li>
              <li><a href="#">Cognitiva</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="input-group">
        <input type="text" class="form-control" placeholder="Escribe nombre o ID de la Sala">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
           <span class="glyphicon glyphicon-flag"></span>
          </button>
        </span>
   </div>
  <div class="input-group">
        <input type="text" class="form-control" placeholder="Para buscar más..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
   </div>
</div>



      
      

    <div class="col-sm-9">
      <h4><small>ÚLTIMAS ACTUALIZACIONES</small></h4>
      <hr>
      <h2>La Alhambra</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Museo, Nov 27, 2017.</h5>
      <h5><span class="label label-danger">Alhambra</span> <span class="label label-primary">Andalusí</span></h5><br>
      <p>La Alhambra de Granada es un palacio nazarí que se mantiene en muy buenas condiciones dado su constante cuidado y algunas reformas. Aún siendo impresionante en la actualidad, con su construcción cuidada, el alicatá original y los poemas en árabe tallados en sus paredes, se dice que en la antiguedad era aún más impresionante pues sus fachadas lucían brillantes colores.</p>
      <br><br>
      
      <h4><small>ELEMENTOS DE LA SALA</small></h4>
      <hr>
      <h2>El alicata. ID: 28 </h2>
      <h5><span class"glyphicon glyphicon-time"></span> Museo, Sep 24, 2017.</h5>
      <h5><span class="label label-success">Arte</span></h5><br>
      <p>El alicatá es un complicado tipo de arte que trata de encajar piedras y cristales de diversos colores en madera de forma armoniosa. Podemos observar y tocar el ejemplo de nuestra sala Andalusí.</p>
      <hr>

      
      
      
      
    </div>
  </div>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

<footer class="container-fluid">
  <p>Desarrollado por Kraken Software</p>
</footer>

</body>
</html>
