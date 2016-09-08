
!DOCTYPE html>
<html>
<head>
  <title>Laravel</title>

  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <!--AngularJS-->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
  <script src="js/app.js"></script>
  <style>
  html, body {
    height: 100%;
  }

  body {
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
    font-weight: 100;
    font-family: 'Lato';
  }

  .container {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
  }

  .content {
    text-align: center;
    display: inline-block;
  }

  .title {
    font-size: 96px;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="title">Laravel 5</div>
      @section('content')
      This is the master sidebar.
      @show
    </div>
  </div>
</body>
</html>