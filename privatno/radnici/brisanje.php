<?php require_once '../../konfiguracija.php'; 
sticenjeStranice($putanjaAplikacije);

for($i=0;$i<count($_SESSION['radnici']);$i++){
    $smjer = $_SESSION['radnici'][$i];
    if($smjer->sifra==$_GET['sifra']){
        unset($_SESSION['radnici'][$i]);
        break;
    }
}

header('location: index.php');