<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="hastaneotomasyon";
    //Baglanti kurma
    $conn=new mysqli($servername,$username,$password,$dbname);
    //Baglanti kontrolü
    if($conn->connect_error){die("baglanti hatasi: ". $conn->connect_error());}
    // echo "baglanti basarili";
?>