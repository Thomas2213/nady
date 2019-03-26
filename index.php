<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="a/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="register.php">add post</a>
        
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><u>SELAMAT DATANG DIWEBKU</u></h1>
        <p class="lead blog-description">merupakan web yang masih absurd</p>
      </div>

    
<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>

   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form id="form-container" class="form-container">
   
<!--Element-elemen tag <body> tulis disini-->
<header> <!--Section HEADER-->
<p>silahkan searching apa saja untuk ke sumber wikipedia</p>

      
     
			<ul>
			
        <label for="input">Wikipedia :</label>
        <input type="text" id="input" value="">
        <button id="submit-btn">submit</button>
					
			</ul>
			

		
  </header>

</header>
 <li class="wikipedia-container">
        <h3 id="wikipedia-header">alamat link wikipedia dari hasil pencarian disini!!!!!</h3>
        <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
    </li>
<br>
<br>
<br>
  <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">CRUD BLOG SEDERHANA</h2>
            <p class="blog-post-meta">12 maret 2019 by <a href="#">Ndy</a></p>
<center>
  <br>
    <h2>ARTIKEL</h2>
  <br><br>
   <table class="table-striped"  cellpadding="10" cellspacing="0" width="70%">
  <tr>
   
    <th>no</th>
    <th>judul </th>
    <th>isi</th>
    <th>terkhir di update</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["judul"] ?></td>
    <td><?= $x["isi"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    
        <td><a href="register.php"><img src="image/btn_delete.png"></a>&nbsp;&nbsp;<a href="register.php"><img src="image/btn_edit.png"></a></td>

   

    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<br>
<br>
</center>
  </body>

</html>

          <div class="blog-post">
            <h2 class="blog-post-title">GIT</h2>
            <p class="blog-post-meta">12 maret by <a href="#">nf</a></p>

            <p>Git adalah salah satu tool yang sering digunakan dalam proyek pengembangan software.

Git bahkan menjadi tool yang wajib dipahami oleh programmer, karena banyak digunakan di mana-mana.

Pada kesempatan ini kita akan belajar Git dari dasar.

Artikel ini hanya akan membahas pengenalan Git saja. Untuk mempelajari Git lebih lanjut, saya sudah menyediakan link di bagian akhir.
<br>
Mengenal Git

Git adalah salah satu sistem pengontrol versi (Version Control System) pada proyek perangkat lunak yang diciptakan oleh Linus Torvalds.

Pengontrol versi bertugas mencatat setiap perubahan pada file proyek yang dikerjakan oleh banyak orang maupun sendiri.

Git dikenal juga dengan distributed revision control (VCS terdistribusi), artinya penyimpanan database Git tidak hanya berada dalam satu tempat saja.</p>
<bR>
<p> tutorial git, silahkan klikkkk >>>>>>>>>  <a href="https://www.youtube.com/watch?v=Pq05cauucs8">youtube</a>

<style background: url(nady.jpg)></style>
      
    

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>   
	
  </body>
</html>
