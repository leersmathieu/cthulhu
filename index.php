<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("VIEW", "views/");
define("VIEWS", "views/", true);
define("CONTROLLER", "controllers/", true);
define("CONTROLLERS", "controllers/", true);
define("MODEL", "models/", true);
define("MODELS", "models/", true);

// Importation des classes
require(CONTROLLERS."mycontroller.php");
require(CONTROLLERS."controller.php");
require(MODELS."mymodel.php");
require(MODELS.'model.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bidouille Partage</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://use.fontawesome.com/da2739b993.js"></script>
    <script src="assets/js/vendors/jquery-3.3.1.min.js"></script>
  </head>
  <body>

    <?php
      $valid_actions = ["home", "contact", "user"];
      // Page à afficher
      $action = (isset($_GET['action']) && in_array($_GET['action'], $valid_actions)) ? $_GET['action'] : "home";

      Controller::get()->action($action);
    ?>

  </body>
</html>

<script src="assets/js/controller.js"></script>
