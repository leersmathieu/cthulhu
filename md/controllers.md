# Controllers

mise en forme des pages en incluant des vues et des appels au Model.
seul la fonction action est public.

## Pages

- home
    - header_disconnected : (si l'utilisateur est déconnecter).
    - header_connected : (si l'utilisateur est connecter).
    - home
    - footer
- register
    - header_disconnected : (si l'utilisateur est déconnecter).
    - register
    - footer
- registerValidation
    - MODEL existPseudo
        - true : VIEWS register
        - false : MODEL insertPseudo + CONTROLLER home 
    