<?php 
    include ('kayit.php') ;
?>
<html>

<head>
    <title> SHRS Randevu </title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="icon" href="icon.png" type="x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="topBar">
        <img src="logo.png" />
        <div class="userLogin">
            <a href="user.php">
                <h4> HOŞGELDİNİZ SAYIN </h4>
                <?php echo $kullanicicek['user_ad']; echo " " ; echo $kullanicicek['user_soyad']; ?>
            </a>
        </div>
    </div>

    <div class="content">
        <div class="hastaneRandevu">
            <form action="kayit.php" method="POST">
                <table class="table">
                    <tr>
                        <td>Hastane</td>
                        <td> <select name="doktor">
                                <?php 
                            $doktorSor=$db->prepare("select * from doktor");
                            $doktorSor->execute();
                            while($doktorCek=$doktorSor->fetch(PDO::FETCH_ASSOC)){ ?>
                                <option value="<?php $doktorCek['doktor_hastane']; ?>">
                                    <?php $doktorCek['doktor_hastane']; ?> </option><br>
                                <?php } ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Klinik</td>
                        <td> <select name="doktor">
                                <?php 
                            $doktorSor=$db->prepare("select * from doktor");
                            $doktorSor->execute();
                            while($doktorCek=$doktorSor->fetch(PDO::FETCH_ASSOC)){ ?>
                                <option value="<?php $doktorCek['doktor_klinik']; ?>">
                                    <?php $doktorCek['doktor_klinik']; ?> </option><br>
                                <?php } ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Doktor</td>
                        <td> <select name="doktor">
                                <?php 
                            $doktorSor=$db->prepare("select * from doktor");
                            $doktorSor->execute();
                            while($doktorCek=$doktorSor->fetch(PDO::FETCH_ASSOC)){ ?>
                                <option value="<?php $doktorCek['doktor_ad']; ?>"> <?php $doktorCek['doktor_ad']; ?>
                                </option><br>
                                <?php } ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Saat</td>
                        <td> <input type="time" id="saat" name="saat" min="08:00" max="17:00" required></td>
                    </tr>
                    <tr>
                        <td>Tarih</td>
                        <td> <input type="date" name="tarih"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <input type="hidden" name="user_id" value="<?php echo $kullanicicek['user_id'] ?>">
                        </td>
                        <td>
                            <button type="submit" name="randevu_kaydet">Randevu Kaydet</button>
                        </td>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="ahekimRandevu">
            <form action="kayit.php" method="POST">
                <table>
                    <tr>
                        <input type="hidden" name="hastane" value="Semt Polikiliniği">
                        <input type="hidden" name="klinik" value="Semt Polikliniği">
                        <td>Doktor</td>
                        <td> <select name="doktor">
                                <option value="ahekim"> Aile Hekiminiz <?php echo $kullanicicek['user_ahekim']; ?>
                                </option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Saat</td>
                        <td> <input type="time" id="saat" name="saat" min="08:00" max="17:00" required></td>
                    </tr>
                    <tr>
                        <td>Tarih</td>
                        <td> <input type="date" name="tarih"></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <input type="hidden" name="user_id" value="<?php echo $kullanicicek['user_id'] ?>">
                        </td>
                        <td>
                            <button type="submit" name="randevu_kaydet">Randevu Kaydet</button>
                        </td>
                        </td>
                    </tr>
                </table>
            </form>
            <div>
            </div>
        </div>
    </div>

    <div class="userPanel">
        <a href="randevuAl.php"> <button class="dropbtn" form="action=POST">Randevu Al</button> </a> <br>
        <div class="dropdown">
            <button class="dropbtn">Randevularım</button> <br>
            <div class="dropdown-content">
                <a href="bekleyenRandevu.php">Bekleyen Randevular</a>
                <a href="gecmisRandevu.php">Geçmiş Randevular</a>
            </div>
        </div>

        <a href="hesap.php"> <button class="dropbtn">Ayarlarım</button> </a><br>
        <a href="logout.php"> <button class="dropbtn">Çıkış</button> </a>

    </div>

    <div class="social">
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
    </div>

    <footer>
        <p>Sivas Hastane Randevu Sistemi®<br>
            <a href="https://saglik.gov.tr">T.C. Sağlık Bakanlığı</a>
        </p>
    </footer>
</body>

</html>