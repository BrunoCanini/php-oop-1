<?php 

class Indirizzo {
    public $strada;
    public $città;
    public $codicePostale;

    function __construct($_strada, $_città, $_codicePostale)
    {
        $this->strada = $_strada;
        $this->città = $_città;
        $this->codicePostale = $_codicePostale;
    }
}

class Movie {
    public $nome;
    public $genere;
    public $lingua;
    public $indirizzo;

    function __construct($_nome, $_genere, $_lingua, Indirizzo $indirizzo)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->lingua = $_lingua;
        $this->indirizzo = $indirizzo;
    }

    public function getInfo(){
        return  $this->nome . " " . $this->genere . " " . $this->lingua . "(" .  $this->indirizzo->strada . ", " . $this->indirizzo->città . ", " . $this->indirizzo->codicePostale . ")" ;
    }
}

$batman = new Movie("Batman Il Cavaliere Oscuro", "Azione", "IT", new Indirizzo("via laggiù", "hollywood", 90028 ));

$diablo = new Movie("Diablo 4", "Splatter", "EN", new Indirizzo("via quaggiù", "hollywood", 90028 ));

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

    <?php echo $batman->getInfo(); ?>
    
    <?php echo "<br>" . $diablo->getInfo(); ?>

    
</body>
</html>