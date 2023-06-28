<?php
if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];

    echo "Nom : " . $lastname . "<br>";
    echo "Prénom : " . $firstname . "<br>";
} else {
    echo "Certains paramètres sont manquants dans l'URL.";
}
echo "<br/>";
echo "<br/>";
//ex02
if(isset($GET['age'])){
    $age = $GET['age'];
    echo "age: ". $age . "<br/>";
} else {
    $age = 42;
    echo "age: ". $age . "<br/>";
}
echo "<br/>";
echo "<br/>";
//ex03
if(isset($GET['starDate'])  && isset($_GET['endDate'])){
    $stardate = $_GET['starDate'];
    $endDate = $_GET['endDate'];
    echo "stardate : " . $starDate . "<br>";
    echo "enddate : " . $endDate . "<br>";
}




?>

