<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon Super Site</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script> -->
</head>

<body>

    <!-- <p>
    Bonjour <?php echo $_GET['nom']. " " .$_GET['prenom'] ?>
</p> -->

    <?php

if(isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])){
    // on force la conversion en nombre entier
    $_GET['repeter'] = (int)$_GET['repeter'];

    //le nomrbre doit etre compris entre 0 et 100
    if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) {
       for ($i=0; $i < $_GET['repeter']; $i++) { 
        echo 'Bonjour '. $_GET['prenom'] . ' '. $_GET['nom']. ' !<br />';
        } 
    }

    
}
else
{
    echo "Il faut renseigner un prénom et un nom et un nombre de repetitions !";
}

?>

</body>

</html>