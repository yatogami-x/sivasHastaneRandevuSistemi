<html>

<head>
    <title> SHRS Yönetici Paneli </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="banner">
        <img src="adminLogo.png">
    </div>
    <div class="content">
        <?php 
   include ("baglanCon.php");
$sql = "SELECT admin_ad,admin_soyad,admin_tc, admin_pass FROM adminler";
$result = $conn->query($sql);
?>
        <form action="#" method="post">
            <table style="margin-left:40%;">
                <tr>
                    <td>T.C. No: </td>
                    <td><input type="text" maxlength="11" name="admin_tc"> </td>
                </tr>
                <tr>
                    <td>Parola: </td>
                    <td><input type="password" name=admin_pass> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <button type="submit" name="girisYap">GİRİŞ YAP</button></td>
                </tr>
            </table>
            <?php 
    
if(isset($_POST['girisYap'])){
    $admin_tc=$_POST["admin_tc"];
    $admin_pass=$_POST["admin_pass"];

    if ($result->num_rows > 0) {
       
        while($adminCek = $result->fetch_assoc()) {
          if($admin_tc == $adminCek["admin_tc"] ||  $admin_pass == $adminCek["admin_pass"]){
            echo ("<SCRIPT LANGUAGE='JavaScript'> alert('Giriş Başarılı'); window.location='adminPanel.php'</SCRIPT>");
            $_SESSION['admin_tc']=$admin_tc;
        }
        }
       else {
        echo ("<SCRIPT LANGUAGE='JavaScript'> alert('Giriş T.C. veya Şifre Hatalı..!'); window.location='adminLogin.php'</SCRIPT>");
      }
    }
}
      $conn->close();
    ?>
        </form>
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