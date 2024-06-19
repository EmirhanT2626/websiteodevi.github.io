<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Techotec</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

      <header>
          <a href="javascript:void(0);" onclick="ac();" id="acdgm">☰</a>
          <a href="javascript:void(0);" onclick="kapat();" id="kapatdgm">☰</a>
      </header>

      <aside id="menu">
        <h1>Techotec<br>Teknoloji</h1>
        <ul>
          <li><a href="#anasayfa">Ana Sayfa</a></li>
          <li><a href="#hakkimizda">Hakkımızda</a></li>
          <li><a href="#hizmetlerimiz">Hizmetlerimiz</a></li>
          <li><a href="#projelerimiz">Ürün Satışımız</a></li>
          <li><a href="#iletisim">İletişim</a></li>
          <li><a href="yonetim/index.php">Yönetim Sitesi</a></li>
        </ul>
      </aside>

      <main id="icerik">
        <section id="anasayfa">
          <h1>Techotec Teknoloji</h1>
          <h2>Portfolyo</h2>
          <hr>
          <div class="temizle"></div>
          <div class="galeri">
            <a href="img/anakart.jpg" class="resimler" rel="group2" title="Galeri"><img src="img/anakart.jpg" alt="galeri"></a>
          </div>
          <div class="galeri">
            <a href="img/temizlik.jpg" class="resimler" rel="group2" title="Galeri"><img src="img/temizlik.jpg" alt="galeri"></a>
          </div>
          <div class="galeri">
            <a href="img/anakart.jpg" class="resimler" rel="group2" title="Galeri"><img src="img/anakart.jpg" alt="galeri"></a>
          </div>
          <div class="galeri">
            <a href="img/temizlik.jpg" class="resimler" rel="group2" title="Galeri"><img src="img/temizlik.jpg" alt="galeri"></a>
          </div>
          <div class="galeri">
            <a href="img/anakart.jpg" class="resimler" rel="group2" title="Galeri"><img src="img/anakart.jpg" alt="galeri"></a>
          </div>
          <div class="galeri">
            <a href="img/temizlik.jpg" class="resimler" rel="group2" title="Galeri"><img src="img/temizlik.jpg" alt="galeri"></a>
          </div>
          <div class="temizle"></div>
        </section>
        
        <section id="hakkimizda">
          <h2>Hakkımızda</h2>
          <hr>
          <div class="temizle"></div>
          <p>TECHOTEC Teknoloji, kuruluşundan itibaren süregelen kesintisiz bir hizmet sunma geleneği ile zamanın evrimine ve teknolojik gelişmelere uyum sağlayan bir ürün serivi ve e-ticaret sitesidir.</p>
          <p>Amacımız en iyi hizmeti vermektir.</p>
        </section>

        <section id="hizmetlerimiz">
          <h2>Hizmetlerimiz</h2>
          <hr>
          <div class="temizle"></div>
          <p>Tüm hizmetlerimiz aşağıda sıralanmaktadır.</p>
          <ul>
            <li>Ürün satışı ve satış sonrası.</li>
            <li>Ürün bakım - onarım yedek parça ve tamir hizmetimiz.</li>
            <li>Çevre bileşenleri satışımız.</li>
            <li>Sarf malzemeleri satışımız.</li>
            <br>
            <p>Alanlarında hizmet vermekteyiz.</p>
        </section>

        <section id="projelerimiz">
          <h2>Ürün Satışımız</h2>
          <hr>
          <div class="temizle"></div>
          <p>Uygun fiyat ve indirimlerimizi takip etmeyi unutmayın.</p>
          <p></p>
        </section>

        <section id="iletisim">
          <h2>İletişim</h2>
          <hr>
          <div class="temizle"></div>
          <form method="post" action="">
            <label for="adsoyad">Ad Soyad</label>
            <input type="text" name="adsoyad" id="adsoyad" required>

            <label for="telefon">Telefon</label>
            <input type="tel" name="telefon" id="telefon">

            <label for="eposta">E-posta</label>
            <input type="email" name="eposta" id="eposta">

            <label for="mesaj">Mesaj</label>
            <textarea name="mesaj" id="mesaj"></textarea>

            <button type="submit">Mesaj Gönder</button>
          </form>
        </section>
        
        <footer>
          <p>Tasarım <span>❤</span> <a href="" target="_blank">Emirhan Taşkın</a></p>
        </footer>
      </main>

      <script src="js/jquery-1.4.3.min.js"></script>
      <script src="js/jquery.fancybox-1.3.4.js"></script>
    <script>
        $("a.resimler").fancybox();

        function ac() {
            document.getElementById("menu").style.display = "block";
            document.getElementById("icerik").style.paddingLeft = "350px";
            document.getElementById("acdgm").style.display = "none";
            document.getElementById("kapatdgm").style.display = "block";
        }

        function kapat() {
            document.getElementById("menu").style.display = "none";
            document.getElementById("icerik").style.paddingLeft = "50px";
            document.getElementById("acdgm").style.display = "block";
            document.getElementById("kapatdgm").style.display = "none";
        }
    </script>  

    </body>
</html>