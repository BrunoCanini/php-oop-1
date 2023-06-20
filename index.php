<?php 

class Movie {
    public $nome;
    public $genere;
    public $lingua;

    public function getInfo(){
        return  $this->nome . " " . $this->genere . " " . $this->lingua ;
    }
}

$batman = new Movie;
$batman ->nome = "Batman Il Cavaliere Oscuro";
$batman ->genere = "Azione";
$batman ->lingua = "IT";

$diablo = new Movie;
$batman ->nome = "Diablo 3";
$batman ->genere = "Splatter";
$batman ->lingua = "EN";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

    <?php 
    
     echo $batman->getInfo()

    ?>
    
</body>
</html>