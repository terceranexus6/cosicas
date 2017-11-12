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
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#section2" role="button" aria-haspopup="true" aria-expanded="false">
      Idioma <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <li><a href="#español">Español</a></li>
        <li><a href="#section3">ingles</a></li>
    </ul>
    
    
        <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#section2" role="button" aria-haspopup="true" aria-expanded="false">
      Rol visitante <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    	<li><a href="#junior">Junior</a></li>
        <li><a href="#vista">Discapacidad visual</a></li>
        <li><a href="#vista">Discapacidad cognitiva</a></li>
        <li><a href="#vista">Discapacidad móvil</a></li>
    </ul>
        <li><a href="#section3">Sala</a></li>
      </ul><br>
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

      <h4>Deja un comentario de la sala:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Comentar!</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anja <small>Sep 29, 2017, 9:12 PM</small></h4>
          <p>Genial, me encanta esta sala, he aprendido un montón.</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Juan <small>Sep 25, 2017, 8:25 PM</small></h4>
          <p>Me gusta mucho, especialmente la maqueta de la Alhambra.</p>
          <br>
          <p><span class="badge">1</span> Respuesta:</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-xs-10">
              <h4>Patricia<small>Sep 25, 2017, 8:28 PM</small></h4>
              <p>Si, es casi igual que la original... ¡Me encanta!</p>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
