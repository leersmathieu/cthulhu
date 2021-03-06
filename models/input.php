<?php

/**
 * Permet de générer des inputs.
 * 
 * Cette classe hérite de la class HTMLElement.
 */
class Input extends HTMLElement{

    /**
     * __construct
     *
     * @param string $name=''
     * @param string $type=''
     * @param string $value=''
     * @param string $placeholder=''
     * @return void
     */
    public function __construct($name='', $type='', $value='', $placeholder=''){
        $this->attributes['name'] = $name; 
        $this->attributes['type'] = $type;

        if(!$value && $name){ // Si l'input à un nom mais pas de valeur...
            // ... on tente de récupérer une valeur dans $_POST
            $this->attributes['value'] = get_value($name);
        }
        else{
            // Autrement on lui attribut la valeur passée en paramètre
            $this->attributes['value'] = $value; 
        } 

        if($placeholder){
            $this->attributes['placeholder'] = $placeholder;
        }
    }

    protected function generateHTML(){
        $html = "<input";
        if(isset($this->attributes)){
            foreach($this->attributes as $attribute_key => $attribute_value){
                $html .=  $this->printAttributes($attribute_key);
            }      
        }
        $html.= ">";

        $this->html = $html;
    }


    /**
     * Permet de modifier la valeur de l'attribut HTML *placeholder*
     *
     * @param string $placeholder : Le(s) mot(s) à placer comme placeholder
     * @return void
     */
    public function setPlaceholder(string $placeholder){
        $this->attributes['placeholder'] = $placeholder;
    }
}