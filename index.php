<?php 

class Movie {
    public $nome;
    public $genere;
    public $lingua;

    function __construct($_nome, $_genere, $_lingua)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->lingua = $_lingua;
    }

    public function getInfo(){
        return  $this->nome . " " . $this->genere . " " . $this->lingua ;
    }
}

$batman = new Movie("Batman Il Cavaliere Oscuro", "Azione", "IT");

$diablo = new Movie("Diablo 4", "Splatter", "EN");

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
    
     echo $batman->getInfo();
     echo $diablo->getInfo();

    ?>
    
</body>
</html>