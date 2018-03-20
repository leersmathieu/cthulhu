let deployed = false;

function showMenu(e){
    // let menuBurger = e.target;
    let $aside = $("aside");
    // console.log( $aside.html() );

    if(deployed){
        $aside.css({left: "-50%"});
    }
    else{   
        $aside.css({left: "0%"});    
    }

    deployed = !deployed;
}

console.log("Script chargé :)\n! Rappel: 'Ctrl + Shift + P' pour ouvrir l'invit de commande et activer/désactiver Javascript.");