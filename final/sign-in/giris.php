<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../sign-in/sign-in.css">
    <style>
      body {
        background-image: url('../choco-cake-food.jpg');
      }
    </style>
  </head>

  <body class="d-flex justify-content-center align-items-center text-center">
    <div class="bg-light p-4 rounded-3 ">
    <form class="form-signin" method="post" action="" class="border border-success">
      <h1 class="h3 mb-4 font-weight-normal">Giriş Yapınız.</h1>
      <input type="text" id="inputUsername" class="form-control mb-1" name="blogsite_name" placeholder="Kullanıcı Adı"   >
      <input type="password" id="inputPassword" name="blogsite_sifre" class="form-control" placeholder="Şifre" >
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> 
          Beni Hatırla
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Giriş Yap!</button>
      <?php 
          require "connect.php";
          if (isset($_POST['login'])) {
            $blogsite_name = $_POST['blogsite_name'];
            $password = $_POST['blogsite_sifre'];
            $result = mysqli_query($conn, "SELECT * FROM blogsite WHERE blogsite_name = '$blogsite_name'");
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) > 0) {
              if ($password == $row['blogsite_sifre']) {
                $_SESSION["login"] = true;
                $_SESSION["blogsite_name"] = $row["blogsite_name"];  
                echo "Başarılı bir şekilde giriş yaptınız"; 
                header("Refresh:1 ../index.php");
              }
              else {
                echo "Yanlış Şifre";
              }
              
            }
            else{
              echo "Kaydınız Bulunmamaktadır";  
            }
          }
          ?>
          
      <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
    </form>
    </div>
  </body>
</html>