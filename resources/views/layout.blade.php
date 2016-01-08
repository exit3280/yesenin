<!DOCTYPE html>
<html ng-app="app">
  <head>
    <title>Sergej Yesenin</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#/">A tribute to the amazing Russian poet - <b>Sergey Yesenin</b></a>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      <div ng-view></div>
    </div>

    <script src="js/all.js"></script>
  </body>
</html>
