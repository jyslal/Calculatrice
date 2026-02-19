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
        body {
            height: 100vh;
            margin: 0;
            background: beige;

        }
        .title {
            margin-top: 0;
            margin-left: 33%;
            position: absolute;
            text-align: top;
            font-size: 90px;
            font-weight: bold;
            color: #3a2105;

        }
        form{
            /*pour centre le formulaire*/
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 100;
            /*pour ajuster le contenue*/
            display: flex;/*pour faire un flexbox*/
            flex-direction: column;/*pour aligner les éléments en colonne*/
            justify-content: center;/*pour centrer les éléments verticalement*/
            align-items: center;/*pour centrer les éléments horizontalement*/
            border-radius: 8%;
            width: 600px;
            height: 600px;
            background: #1b470a5b;
            border: none;

        }
        form input {
            width: 500px;
            height: 100px;
            border-radius: 5px;
            border: none;
            background: #10300398;
            color: #fff;    
            font-family: MelsoLMGs NF, sans-serif;
            font-size: 50px;
            font-weight: bold;

        }
        form input:hover {
            background: #256e08ad;
            scale: 0.98;
            transition: 0.3s;
            color: beige;
            opacity: 0.8;

        }
        form input[type="submit"] {
            background: #3a2105;
            color: #fff;
            cursor: pointer;
            transition: 0.3s;

        }
        form input[type="submit"]:hover {
            background: #4b2b06;
            scale: 0.98;
            transition: 0.3s;
            color: beige;
            opacity: 0.8;

        }
        form select {
            width: 500px;
            height: 100px;
            border-radius: 5px;
            border: none;
            background: #10300398;
            color: #fff;    
            font-family: MelsoLMGs NF, sans-serif;
            font-size: 50px;
            font-weight: bold;

        }
        form select:hover {
            background: #256e08ad;
            scale: 0.98;
            transition: 0.3s;
            color: beige;
            opacity: 0.8;

        }
        
        
    </style>
</head>
<body>
    <p class="title">App de calcul +/-</p>
    <form action="" method="POST">
        <div>
            <input type="text" name="Nombre1" id="Nombre1" placeholder="Nombre1" required><br><br>
            <input type="text" name="Nombre2" id="Nombre2" placeholder="Nombre2" required><br><br>
            <select name="operation" id="operation">
                <option value="addition">addition</option>
                <option value="soustraction">soustraction</option>
                <option value="division">division</option>
                <option value="multiplication">multiplication</option>
            </select><br><br>
            <input type="submit" value="valider">
        </div>
    </form>
</body>
</html>