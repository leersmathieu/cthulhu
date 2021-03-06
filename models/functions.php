<?php

/**
  * La fonction *get_value* permet de récupérer une valeur contenue dans *$_POST*, la sanitise et la retourne. 
  * Retourn null s'il y a une erreur.
  *
  * @param string $value_name La clef de la valeur que l'on souhaite récupérer
  * @param string $filter Le type de filtre que l'on souhaite utiliser pour la validation/sanitisation (valeurs acceptées : string, email)
  *
  * @return string|null
  */
function get_value($value_name, $filter="string"){
    if($filter == "email"){
        $filter_sanitize = FILTER_SANITIZE_EMAIL;
        $filter_validate = FILTER_VALIDATE_EMAIL;
    }
    else{
        $filter_sanitize = FILTER_SANITIZE_STRING;
    }

    if(isset($_POST[$value_name])){
        $value = filter_var( $_POST[$value_name], $filter_sanitize );
        $value = trim($value);

        if( $filter != "string"){
            $value = filter_var( $_POST[$value_name], $filter_validate );
        }

        if($value != null && $value != false && $value != ""){
            return $value;
        }
    }

    return null;
}