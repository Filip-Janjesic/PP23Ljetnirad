<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);

$smjer = (object)$_POST;

for($i=0;$i<count($_SESSION['radnici']);$i++){
    $s = $_SESSION['radnici'][$i];
    if($s->sifra==$smjer->sifra){
        $_SESSION['radnici'][$i]=$smjer;
        break;
    }
}

header('location: index.php');