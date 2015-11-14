
<!DOCTYPE html>
<html lang="es" ng-app>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="cerrajero">
    <meta name="author" content="jdussan">
    <link rel="icon" href="vendor/twbs/bootstrap/docs/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="signin.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="vendor/twbs/bootstrap/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Acceso</h2>
        <label for="inputEmail" class="sr-only">Usuario:</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus ng-model="nombre">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <h1>Hola {{nombre}}</h1>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Jquery vía CDN -->
    <script src="http://code.jquery.com/jquery-1.11.3.js" type="text/javascript"></script>
    <!-- Angular vía CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js" type="text/javascript">

    </script>
  </body>
</html>
