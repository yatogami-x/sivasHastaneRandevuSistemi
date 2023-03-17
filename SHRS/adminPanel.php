<html>

<head>
    <title> SHRS Yönetici Paneli </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="banner">
        <?php 
   include ("baglanCon.php");
$sql = "SELECT admin_ad,admin_soyad,admin_tc, admin_pass FROM adminler";
$result = $conn->query($sql);
?>
        <img src="adminLogo.png"> <?php  $adminCek = $result->fetch_assoc() ;
         echo ("Yönetici"." ".$adminCek["admin_ad"]." ". $adminCek["admin_soyad"]); 
        ?>

    </div>
    <div class="buttons">
        <table>
            <tr>
                <td>
                    <button type="submit" name="">Hastalar</button>
                </td>
                <td>
                    <button type="submit" name="">Hastaneler</button>
                </td>
                <td>
                    <button type="submit" name="">Doktorlar</button>
                </td>
                <td>
                    <button type="submit" name="">Randevular</button>
                </td>
                <td>
                    <button type="submit" name="">Yöneticiler</button>
                </td>
        </table>
    </div>
    <div class="content">

    </div>
    <div class="footer">
        <footer>
            <p>Sivas Hastane Randevu Sistemi®<br>
                <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
            </p>
        </footer>
    </div>
</body>

</html>