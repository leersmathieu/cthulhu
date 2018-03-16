<?php

  class MyController {
    public function action($action) {
      require VIEWS."header.php";

      if($action == "home"){
        require VIEWS."home.php";
      }

      require VIEWS."footer.php";
    }
  }
