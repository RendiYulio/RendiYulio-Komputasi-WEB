<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Pertemuan 4 Rendi</title>
  </head>
  <body>
    <?php
    echo "<h1>Halaman Bootstrap Pertama</h1>";
    echo "<p>Praktik Pertemuan 4</p>";
    ?>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button"
        data-toggle="collapse" 
        data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://google.com/"> Google</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Link 2</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Link 3</a>
                    
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1>Halaman Bootstrap Pertama</h1>
        <p>Rendi Yulio Pramudita, Universitas Pembangunan Jaya, Prodi Informatika, NIM 2023071047   </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
             
                <form action="contact.php" method="POST">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name"><br><br>
            
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="kelamin">Jenis Kelamin:</label>
                    <select id="kelamin" name="kelamin" required>
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select><br><br>

                    <label for="tanggallahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggallahir" name="tanggallahir" required><br><br>

                    <label for="umur">Umur:</label>
                    <input type="number" id="umur" name="umur" required><br><br>>

                    <input type="submit" value="Submit">
            
                </form>

            </div>

            <div class="col-sm-4">
                <h3>Kolom 2</h3>
                <p>Fenomena anak kesayangan memang bukan hal baru. Sejak dulu, kita sering mendengar cerita tentang saudara kandung yang merasa dianaktirikan atau orangtua yang terang-terangan lebih menyayangi salah satu anaknya.</p>
            </div>
           
        </div>

        <div class="row">
            <div class="col-sm-4">
                <h3>Kolom 1</h3>
                <p>Fenomena anak kesayangan memang bukan hal baru. Sejak dulu, kita sering mendengar cerita tentang saudara kandung yang merasa dianaktirikan atau orangtua yang terang-terangan lebih menyayangi salah satu anaknya.</p>
            </div>
            
            <div class="col-sm-4">
                <h3>Kolom 3</h3>
                <p>Fenomena anak kesayangan memang bukan hal baru. Sejak dulu, kita sering mendengar cerita tentang saudara kandung yang merasa dianaktirikan atau orangtua yang terang-terangan lebih menyayangi salah satu anaknya.</p>
            </div>

            <div class="col-sm-4">
                <h3>Kolom 3</h3>
                <p>Fenomena anak kesayangan memang bukan hal baru. Sejak dulu, kita sering mendengar cerita tentang saudara kandung yang merasa dianaktirikan atau orangtua yang terang-terangan lebih menyayangi salah satu anaknya.</p>
            </div>
            
        </div>

    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  </body>
</html>