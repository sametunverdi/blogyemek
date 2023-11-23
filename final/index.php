<?php 
require "../final/sign-in/connect.php";
date_default_timezone_set("Europe/Istanbul");



if (!empty($_SESSION['blogsite_name'])) {
    $blogsite_name = $_SESSION["blogsite_name"];
    
    // SQL sorgusunu hazırla
    $query = "SELECT * FROM blogsite WHERE blogsite_name = ?";
    $stmt = $conn->prepare($query);

    // Parametreleri bağla
    $stmt->bind_param("s", $blogsite_name);

    // Sorguyu çalıştır
    $stmt->execute();

    // Sonucu al
    $result = $stmt->get_result();

    // Verileri al
    $row = $result->fetch_assoc();
}
?>


<!doctype html>
<html lang="tr" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Sam-Et</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/"
    >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    

    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <header class="p-3 text-bg-secondary">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <h3 class="d-flex align-items-center justify-content-lg-start me-5 mb-lg-0 text-white text-decoration-none">
            Sam-et cook
          </h3>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto  justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
            <div class=" dropdown">
              <a class="nav-link bg-primary text-white dropdown-toggle rounded-pill" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategoriler
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="card.php">cook</a></li>
                <li><a class="dropdown-item" href="#">kategori1</a></li>
                <li><a class="dropdown-item" href="#">kategori2</a></li>
              </ul>
            </div>
              
            <!-- <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li> -->
            <!-- <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li> -->
            <!-- <li><a href="#" class="nav-link px-2 text-white">About</a></li> -->
          </ul>
  
          
  
          <?php if (isset($_SESSION['login'])) {?>
            <h5 style="text-transform: capitalize;" class="me-3">Merhaba <?php echo $row['blogsite_name'] ?></h5>
            <div class="dropdown text-end">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../final/sign-in/logout.php">Sign out</a></li>
            </ul>
          </div>
        <?php } 
            else {?>
                <ul class="nav">
                    <li class="nav-item me-2">
                        <a href="../final/sign-in/giris.php" class="nav-link bg-warning text-white btn">
                            Giriş Yap
                        </a>
                    </li>
                    <li class="nav-item">
                         <a href="../final/sign-in/kayıt.php" class="nav-link bg-danger text-white btn">
                           Kayıt Ol 
                        </a>
                    </li>
                </ul>
        <?php } ?>
              <div class=""><?php echo date('d.m.y h:i:s') ?></div>
        </div>
      </div>
    </header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.gorgulupasta.com/images/cake_cover.jpg" height="100%" width="100%">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Eşsiz Pastalar</h1>
            <!-- <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://w.forfun.com/fetch/60/6097a5e72da684293dd5bc5a5e6bb653.jpeg" height="100%" width="100%">
        <div class="container">
          <div class="carousel-caption">
            <h1>Aparatif Tarifler</h1>
            <!-- <p>Some representative placeholder content for the second slide of the carousel.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://wallpapers.com/images/hd/food-4k-1pf6px6ryqfjtnyr.jpg" height="100%" width="100%">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Birbirinden Farklı Lezzetler</h1>
            <!-- <p>Some representative placeholder content for the third slide of this carousel.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="https://thumbs.dreamstime.com/b/turkish-manti-yoghurt-tomato-sauce-plate-black-background-top-view-288726918.jpg" class="rounded" height="200px">
        <h2 class="fw-normal">MANTI</h2>
        <p>Mantı, çeşitli baharatlarla çeşnilendirilen kıymanın, küçük hamur parçalarının içine konulması ve bu hamur parçalarının suda haşlanması ile yapılan yemektir. Türk mutfağının olduğu kadar Orta Asya mutfaklarının da bir parçası olan mantı, eski SSCB ülkelerinde de popüler bir yiyecektir.</p>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="https://blog.turkishairlines.com/wp-content/uploads/2022/02/turk-mutfagi-baklava.jpg.webp" class="rounded" height="200px">
        <h2 class="fw-normal">BAKLAVA</h2>
        <p>Baklava Türk, Orta Doğu, Balkan ve Güney Asya mutfaklarında yer etmiş önemli bir hamur tatlısıdır. İnce yufkaların arasına yöreye göre ceviz, antep fıstığı, badem veya fındık konarak yapılır. Genel olarak şeker şerbeti ile tatlandırılır. Ayrıca bal şerbeti de kullanılabilir.</p>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="https://img.freepik.com/free-photo/traditional-eastern-desserts-wooden-background_93675-131678.jpg" class="rounded" height="200px">
        <h2 class="fw-normal">TÜRK LOKUMU</h2>
        <p>Lokum; su, şeker, nişasta ve sitrik asit veya tartarik asit veya potasyum bitartarat ile hazırlanan lokum kitlesine gerektiğinde çeşni maddeleri, kuru veya kurutulmuş meyveler ve benzeri maddelerin ilavesiyle tekniğine uygun olarak hazırlanan geleneksel bir Türk tatlısıdır.</p>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Kahvaltı için <span class="text-body-secondary">saat kaçta kalkarsan kalk kahvaltından asla ödün verme.</span></h2>
        <p class="lead">Uyandığımızda kahvaltı ederek, ihtiyacımız olan enerjiyi almak fiziksel ve psikolojik açıdan kendimizi daha iyi hissetmemizi sağlar. Kahvaltı etmeyen kişiler yorgunluk, güçsüzlük, konsantrasyon bozukluğu, kan şekeri düşüklüğü ve gün boyu uykusuzluk yaşarken, kahvaltı edenler daha enerjik olur.</p>
      </div>
      <div class="col-md-5">
        <img src="https://img.freepik.com/free-photo/delicious-breakfast-meal-composition_23-2148878834.jpg" height="400px" width="600px" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Öğle yemeği ile <span class="text-body-secondary">günün kalan için enerjimizi yükseltelim.  </span></h2>
        <p class="lead">Öğle yemeği, öğleden akşama kadar geçen sürede konsantrasyonun daha uzun sürmesine yardımcı olur. Öğle yemeğinde alınacak kalori ve tüketilecek sıvı, gün içerisinde kan şekerinin dengeli yükselmesini ve düşmesini sağlayarak daha enerjik hissetmenize yardımcı olacaktır.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="https://img.freepik.com/free-photo/batch-food-cooked-assortment_23-2148765523.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1697500800&semt=ais"  height="400px" width="500px" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Akşam yemeği ile <span class="text-body-secondary">güzel bir günü daha bitirmek.</span></h2>
        <p class="lead">Akşam yemeklerinin sadece miktar ve içeriklerinin değil, zamanlamasının da önemli olduğunu gösteriyor. Akşam yemeklerini hafifletmenin ve karbonhidrat ağırlığını azaltıp protein yükünü arttırmanın daha sağlıklı ve formda bir vücut için gerekli bir öğündür yalnız geç saattelerde yemek kilo artışına neden olur.</p>
      </div>
      <div class="col-md-5">
        <img src="https://burst.shopifycdn.com/photos/flatlay-iron-skillet-with-meat-and-other-food.jpg?width=1000&format=pjpg&exif=0&iptc=0" height="400px" >
      </div>
    </div>

    <hr class="featurette-divider">

    
   

  </div>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary nav-link" href="#">Home</a></li>
        <li class="ms-3"><a class="text-body-secondary nav-link" href="#">Tatlılar</a></li>
        <li class="ms-3"><a class="text-body-secondary nav-link" href="#">cook</a></li>
      </ul>
    </footer>
  </div>
</main>

    </body>
</html>
