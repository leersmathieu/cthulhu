<?php

/**
 * Class abstraite définissant la base d'un élément HTML
 */
abstract class HTMLElement{
    protected $html; // Le contenu de notre objet, mais sous forme de code HTML
    protected $attributes; // Tableau contenu les attributs HTML
    protected $id = "";
    protected $classes = "";
    protected $child_elements = []; // Array qui contient d'autres HTMLElement

    protected $need_update = true; // Indique s'il y a besoin de mettre à jour l'HTML


    /**
     * Permet de récupérer l'objet sous forme d'HTML afin de l'afficher sur notre page web.
     *
     * @return string
     */
    public function output(): string{ 
        if($this->need_update){
            $this->generateHTML();
            $this->need_update = false;
        }
        
        return $this->html;
    }

    /**
     * Permet d'ajouter une ou plusieurs classes (CSS) à notre objet.
     * 
     * La fonction *addClass* vérifie que l'objet ne possède pas déjà la classe ou les classes fournies en paramètre.
     * Elle ne les ajoute à notre objet que s'il ne les possède pas encore
     *
     * @param mixed $class Un string ou un tableau de string
     * @return void
     */
    public function addClass($class){

        if( is_string($class) ){

        }
        else if( is_array($class) ){

        }

    }

    /**
     * Permet d'ajouter un élément HTML au sein de notre élément HTML
     *
     * @param HTMLElement $new_child : Nouvel élément à ajouter
     * @return int Retourne le nombre d'enfant
     */
    public function addChild(HTMLElement $new_child){
        $this->child_elements[] = $new_child;
        return count($this->child_elements);
    }

    /**
     * Permet de donner un id (CSS) à notre objet.
     *
     * @param string $new_id Le nom de l'id
     * @return void
     */
    public function setID(string $new_id){
        $this->id = $new_id;
    }

    
    /**
     * Permet à notre objet de savoir s'il possède déjà une classe (CSS) en particulier
     *
     * @param string $class : La classe (CSS) à vérifier
     * @return bool
     */
    protected function classExistAlready(string $class){
        // return in_array($class, $this->classes);
        return boolval(strpos($this->classes, $class));
    }

    /**
     * Génère l'HTML au sein de notre objet (mais ne le retourne pas)
     *
     * @return void
     */
    abstract protected function generateHTML();

    protected function printAttributes(string $attribute){
        if( $this->attributes[$attribute] ){
            return ' '. $attribute .'="'. $this->attributes[$attribute] .'"';
        }
        else{
            return false;
        }
    }
}