<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Pill Controller</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pill Controller</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h3 style="margin-top:0">Medicines</h3>
        </div>
        <div class="col-md-12">
          <i class="fa fa-fw fa-heart" style="color:#B00"></i> 3 medicines
        </div>
      </div>

      <div style="height:15px"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <a href="#" class="list-group-item">
              <div class="row">
                <div class="col-xs-10">
                  <h4 class="list-group-item-heading">Medicine 1</h4>
                  <p class="list-group-item-text">7 PM</p>
                </div>
                <div class="col-xs-2 text-right">
                  <i class="fa fa-circle fa-2x" style="color:red"></i>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row">
                <div class="col-xs-10">
                  <h4 class="list-group-item-heading">Medicine 2</h4>
                  <p class="list-group-item-text">10 PM</p>
                </div>
                <div class="col-xs-2 text-right">
                  <i class="fa fa-circle fa-2x" style="color:green"></i>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row">
                <div class="col-xs-10">
                  <h4 class="list-group-item-heading">Medicine 3</h4>
                  <p class="list-group-item-text">6 AM, tomorrow</p>
                </div>
                <div class="col-xs-2 text-right">
                  <i class="fa fa-circle fa-2x" style="color:blue"></i>
                </div>
              </div>
            </a>
          </div>

          <a class="btn btn-success pull-right" href="add-medicine">Add Medicine</a>
        </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>