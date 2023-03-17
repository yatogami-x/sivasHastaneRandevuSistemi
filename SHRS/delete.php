<?php
include "kayit.php";
//randevu silme  
        if(isset($_GET['sil'])){
            $sqlsil="DELETE FROM randevu WHERE `randevu`.`randevu_id` = ?";
            $sorgusil=$db->prepare($sqlsil);
            $sorgusil->execute([
                $_GET['sil']
            ]);
            header('Location:bekleyenRandevu.php');
        }
 ?>

