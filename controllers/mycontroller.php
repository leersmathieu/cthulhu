<?php

  class MyController {
    public function action($action) {
      require VIEWS."header.php";

      if($action == "home"){
        require VIEWS."home.php";
      }
      if($action == "user"){
        require VIEWS."userpage.php";
      }

      require VIEWS."footer.php";
    }
  }
