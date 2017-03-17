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

      <form class="form-horizontal" action="/">
        <div class="form-group">
          <label for="medicine" class="col-sm-2 control-label required">Medicine</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="medicine" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="frequency" class="col-sm-2 control-label required">Frequency (hours)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="frequency" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="startDate" class="col-sm-2 control-label required">Start Date</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="startDate" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="startTime" class="col-sm-2 control-label required">Start Time</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="startTime" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="endDate" class="col-sm-2 control-label">End Date</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="endDate" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="endTime" class="col-sm-2 control-label">End Time</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="endTime" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="color" class="col-sm-2 control-label">Color</label>
          <div class="col-sm-10">
            <select class="form-control" id="color">
              <option value=""></option>
              <option value="blue">Blue</option>
              <option value="green">Green</option>
              <option value="yellow">Yellow</option>
              <option value="red">Red</option>
              <option value="orange">Orange</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary pull-right">Save Medicine</button>
          </div>
        </div>
      </form>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>