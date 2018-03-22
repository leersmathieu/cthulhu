<?php

  class MyController {
    public function action($action) {
      require VIEWS."header.php";

      if($action == "user"){
        // Création du formulaire d'inscription
        $form_sign_up = new Form("Sign Up");
        
        $form_sign_up->addChild( new Input("user_name", "text", "", "Your Name Here" ));
        $form_sign_up->addChild( new Input("user_pwd", "text", "", "Your Password Here") );
        $form_sign_up->addChild( new Input("submit", "submit", "Confirmation") );
        
        require VIEWS."userpage.php";
      }
      else if($action == "catalog"){

        require VIEWS."catalog.php";
      }
      else if($action == "subscribe"){

        require VIEWS."subscribe.php";
      }
      else{
        // Par défaut on charge la page d'acceuil...
        // Cependant, il serait peut être intéressant d'inclure une page 404
        
        require VIEWS."home.php";
      }

      require VIEWS."footer.php";
    }
  }
