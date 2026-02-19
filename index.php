<?php 

//==============================================================================================================================
//=                                                                                                                            =
//=                                           Code: index.php                                                                  =
//=                                           Autor: Jyslal                                                                    =
//=                                                                                                                            =
//==============================================================================================================================

    // Inclusions (Attention aux chemins, vérifie s'ils sont corrects)
    require_once "mvc_controller/Controller.php";
    // On n'inclut la vue que si nécessaire, ou on laisse le contrôleur s'en charger

    // Logique de démarrage
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Initialisation du Model avec des données vides ou par défaut
        $model = new Model(0, 0, "");
        $controler = new Controller($model);
        
        // Exécution de la logique
        $controler->initView(
            $_POST['Nombre1'] ?? null, 
            $_POST['Nombre2'] ?? null, 
            $_POST['operation'] ?? null
        );
    } else {
        // Si on n'est pas en POST, on affiche juste la vue du formulaire
        require "mvc_view/View.php";
    }
?>