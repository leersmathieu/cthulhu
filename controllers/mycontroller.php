<?php

  class MyController {
    public function action($action) {
      require VIEWS."header.php";

      if($action == "home"){
        require VIEWS."home.php";
      }
      if($action == "user"){
        // Création du formulaire d'inscription
        $form_sign_up = new Form("Sign Up");

        $form_sign_up->addChild( new Input("user_name", "text", "", "Your Name Here" ));

        $form_sign_up->addChild( new Input("user_pwd", "text", "", "Your Password Here") );
        $form_sign_up->addChild( new Input("submit", "submit", "Confirmation") );

        require VIEWS."userpage.php";
      }

      require VIEWS."footer.php";
    }
  }
