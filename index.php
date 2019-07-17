<!DOCTYPE html>
<html lang="en" ng-app="example_codeenable">
<head>

   <title ng-bind-template="Codeenable | {{title}}"></title>


  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="http://localhost/angularProject/">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/angular.js"></script>
  <script src="js/angular-ui-router.js"></script>
  <script data-require="ui-bootstrap@*" data-semver="0.12.1" src="js/ui-bootstrap-tpls-0.12.1.min.js"></script>

  <script src="js/app.js"></script>
  <script src="js/student_controller.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
<!--                          <li> <img src="./assets/images/ce.png" alt="CE" class="tlogo"> </li>-->
                        <li class="active"><a href="index.php">Home</a></li>
                    </ul>

                </div>
            </div>
        </nav>


<div class="container " >
    <div class="row content">

          <div ui-view> .....</div>
           </div>




</div>




<footer class="container-fluid text-center">
  <p>Sample Footer</p>
</footer>


</body>
</html>