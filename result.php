<?php
//==============================================================================================================================
//=                                                                                                                            =
//=                                           Code: view.php                                                                   =
//=                                           Autor: Jyslal                                                                    =
//=                                                                                                                            =
//==============================================================================================================================


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
        /*Body*/
        body {
            height: 100vh;
            margin: 0;
            background: beige;

        }
        .title {
            /*positionnement du logo*/
            margin-top: 0;
            margin-left: 32%;
            text-align: top;
            font-size: 90px;
            font-weight: bold;
            /*Couleur du logo*/
            color: #3a2105;
            transition: 0.3s;

        }
        .title:hover {
            /*Effet de survol du logo*/
            color: #3a2105;
            scale: 0.97;
            transition: 0.3s;
            opacity: 0.8;


        }
        form{
            /*pour centre le form/*ulaire*/
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 100;
            /*pour ajuster le contenue*/
            text-align: center;
            background: #1b470a5b;
            /*Pour le border du formulaire*/
            border: none;
            border-radius: 5px;

        }
        form p{
            font-size: 100px;
            color: #3a2105;

        }
        a{
            text-decoration: none;
            color: #3a2105;
        
        }
        
        
    </style>
</head>
<body>
    <p class="title"><a href="index.php">App de calcule +/-</a></p>
    <form action="" method="POST">
        <div>
            <p>Le resultat est :<?php echo $_GET['result'] ?? 'Inconnu';?></p>
        </div>
    </form>
</body>
</html>