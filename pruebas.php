<?php

$Coja = 'Jhonnatan';
$estudio = 'HTML';
$Esposa = "Wendy";

switch ($estudio) {

    case 'HTML':
        echo "$Coja ya estudio HTML";
        break;

    case 'CSS':
        echo "$Coja no estudio CSS";
        break;

    case 'PHP':
        echo "$Coja estudia PHP para hacer paginas";
        break;
    
    default:
        echo "no se graduo";
        break;
}


?>

<br>

<?php

$numero = 1;

do {
    echo $numero;
    $numero ++;
} while ($numero <= 10);

?>

<br>

<?php

$numero = 1;

for ($numero=1; $numero <=20 ; $numero = $numero +2) { 
    print $numero;

}

?>