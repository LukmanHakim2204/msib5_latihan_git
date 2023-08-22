<?php
  $fortofolio=[
    'nim'=>'201511030',
    'nama'=>'Lukman Hakim',
    'jurusan'=>'Teknik Informatika',
    'universitas'=>'Universitas Muhammadiyah Cirebon',
    'hobby'=>'Main Game',
    'tujuan_ikut'=>'Tujuannya ingin belajar lebih dalam tentang web developer',
  ];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css" >
    <title>Portfolio Man</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <h1> My Profil</h1>
          <div class="profile">
            <div class="img-man">
              <img src="img/lukman.jpg" alt="">
            </div>
          </div>
        <div class="list-container">
          <div class="list">
            <ul class="list-group">
              <li class="list-group-item ">
                Nim :
                <?php echo $fortofolio['nim'] ?>
              </li>
              <li class="list-group-item">
                Nama :
                <?php echo $fortofolio['nama'] ?>
              </li>
              <li class="list-group-item">
                Jurusan :
                <?php echo $fortofolio['jurusan'] ?>
              </li>
              <li class="list-group-item">
                Universitas :
                <?php echo $fortofolio['universitas']?>
              </li>
              <li class="list-group-item">
                Hobby :
                <?php echo $fortofolio['hobby']?>
              </li>
              <li class="list-group-item">
                Tujuan :
                <?php echo $fortofolio['tujuan_ikut']?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
