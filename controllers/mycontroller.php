<?php

  class MyController {
    public function action($action) {

      if($action == "home"){
        require VIEWS."header.php";
        require VIEWS."home.php";
        require VIEWS."footer.php";
      }
    }
  }
