  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Kayıt Olunuz</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../sign-in/sign-in.css">
    <style>
      body{
        background-image: url('../choco-cake-food.jpg');
      }
    </style>
  </head>

  <body class="text-center d-flex justify-content-center align-items-center">
    <div class="bg-light p-4 rounded-3">
    <form class="form-signin" action="" method="POST">
      <h1 class="h3 mb-4 font-weight-normal">Kayıt Olunuz!</h1>
      <input type="email" id="inputEmail" class="form-control mb-1" placeholder="Email" name="blogsite_mail" required autofocus>
      <input type="text" id="inputUsername" class="form-control" placeholder="Kullanıcı Adı" name="blogsite_name" required>
      <input type="password" id="inputPassword" class="form-control" placeholder="Şifre" name="blogsite_sifre" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> 
          Beni Hatırla
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">Kayıt Ol!</button>

      <?php 
        require "../sign-in/connect.php";
        if (isset($_POST['send'])) {
          $blogsite_name = $_POST['blogsite_name'];
          $blogsite_mail = $_POST['blogsite_mail'];
          $blogsite_sifre = $_POST['blogsite_sifre'];
          $duplicate = mysqli_query($conn, "SELECT * FROM blogsite WHERE blogsite_name = '$blogsite_name' OR blogsite_mail='$blogsite_mail' ");
          if (mysqli_num_rows($duplicate) > 0) {
            echo "Kullanıcı adı veya email daha önceden kullanılmış!";
          }else {
            $query = "INSERT INTO blogsite VALUES('','$blogsite_name','$blogsite_mail','$blogsite_sifre')";
            mysqli_query($conn,$query);
            echo "Kayıt başarılı bir şekilde oluşmuştur";
            header("Refresh:1 ../index.php");
          }
      
        }
      ?>

      <br><br><br><br>
      


      <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
    </form>
    </div>
  </body>
</html>