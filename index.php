<?php
//if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
 //   $lastname = $_GET['lastname'];
 //   $firstname = $_GET['firstname'];

 //   echo "lastname : " . $lastname . "<br>";
 //   echo "firstname : " . $firstname . "<br>";
//} else {
//    echo "Certains paramètres sont manquants dans l'URL.";
//}
echo "<br/>";
echo "<br/>";
//ex02
//if(isset($GET['age'])){
//    $age = $GET['age'];
 //   echo "age: ". $age . "<br/>";
//} else {
//    echo "age introuvable";
//}
echo "<br/>";
echo "<br/>";
//ex03
if (isset($_GET['startDate'])&& isset($_GET['endDate'])){
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
    echo "startdate : " . $startDate . "<br>";
    echo "enddate : " . $endDate . "<br>";
}

//ex04
if (isset($_GET['language'])){

    echo "La page est écrite en PHP." ."<br>";
} else {
    echo "La page n'est pas écrite en PHP." ."<br>";
}
if (isset($_GET['server'])){
    echo "le serveur est LAMP";
} else {
    echo "serveur inconu";
}
 echo '<br/>';
 echo '<br/>';

//ex05
if(isset($_GET['week'])){
    $week = $_GET['week'];
    echo $week;
}

//ex06

if (isset($_GET['building'])&& isset($_GET['room'])){
    $building = $_GET['building'];
    $room = $_GET['room'];
    echo "building : " . $building . "<br>";
    echo "room : " . $room . "<br>";
}


?>

