<?php session_start();
echo "<br>Session : <br>";
var_dump($_SESSION);
echo"<br><br>";
if(isset($_POST["send"])){

    $name=$_POST["name"];
    $envoie= false ;

    function verif($name){

        $expression="/^[a-zA-Z]+$/";

        if(preg_match($expression ,$name)){
            $envoie="true";
            return $envoie;
                }else{
            echo "Veuillez entrez un nom correct s.v.p";
        }
    }
    if(verif($name) == true){
        
        $_SESSION["name"]=$name;
        echo "Merci ".$name;
    }else{
        empty($send);
    }
    
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROMULAIRE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/app.css">
</head>
<body>
    <div class="container-fluid">

            <h1 class="text-center mt-5 mb-5"><b>Formulaire</b></h1>

        <div class=" d-flex justify-content-center">
            <form action="formulaire.php" method="post">
                <label for="Prénom"><h3>Prénom<h3></label>
                <input type="text" class="rounded" name="name" >
                <input type="submit" class=" btn btn-dark rounded" name="send">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>