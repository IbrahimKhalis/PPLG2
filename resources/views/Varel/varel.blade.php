<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAREL STEVEN MAYLANO</title>

  

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('Assets-varel/style.css') }}">
    <!-- custom js file link  -->
<script src="{{ asset('Assets-varel/script.js') }}"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
      <img src="{{ asset('Assets-varel/img.jpeg') }}" alt="">
        <h3 class="name">VAREL STEVEN MAYLANO</h3>
        <p class="post">student at smk taruna bhkati</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Varel Steven Maylano</span></h1>
    <p>hi am varel steven maylano student at smk taruna bhkati
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> Varel Steven Maylano </h3>
        <h3> <span> age : </span> 17 </h3>
        <h3> <span> post : </span> Back End developer </h3>
        <h3> <span> language : </span> INDONESIA </h3>=
    </div>

    <div class="counter">

        <div class="box">
            <span>2</span>
            <h3>years of experience at SMK Taruna Bhakti</h3>
        </div>

        <div class="box">
            <span>4</span>
            <h3>porject completed</h3>
        </div>

        <div class="box">
            <span>3</span>
            <h3>happy clients</h3>
        </div>

        <div class="box">
            <span>2</span>
            <h3>awards won</h3>
        </div>

        <div class="box">
            <span>Skill</span>
            <h3>HTML & CSS</h3>
            <h3>JavaScript</h3>
            <h3>PHP</h3>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->
<section class="education" id="education">

    <h1 class="heading"> my <span>education</span> </h1>
    
    <div class="box-container">
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2012</span>
            <h3>Taman Kanak-Kanak AL-IKHLAS</h3>
            <p>Lulus</p>
        </div>
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2017</span>
            <h3>Sekolah Dasar Negeri Sukamaju Baru 2</h3>
            <p>Lulus</p>
        </div>
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2021</span>
            <h3>Sekolah Menegah Pertama Taruna Bhakti</h3>
            <p>Lulus</p>
        </div>
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2024</span>
            <h3>Sekolah Menengah Kejuruan</h3>
            <p>Lulus</p>
        </div>

</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="education" id="portfolio">

        <h1 class="heading"> my <span>portfolio</span> </h1>
        
        <div class="box-container">
        
            <div class="box">
                <i class="fa-solid fa-medal"></i>
                <span>2017</span>
                <h3>Pramuka</h3>
                <p>mengikuti Anggota Pramuka Pada Saat Duduk Di Sekolah Dasar</p>
            </div>
        
            <div class="box">
                <i class="fa-solid fa-medal"></i>
                <span>2019</span>
                <h3>Anggota Osis</h3>
                <p>Terpilih Menjadi Anggota Osis Pada Saat Menduduki Sekolah Menengah Pertama</p>
            </div>
        
            <div class="box">
                <i class="fa-solid fa-medal"></i>
                <span>2022</span>
                <h3>Juara 1 ESPORT Sahabat Ganjar Depok</h3>
                <p>Memenangkan Kejuaraan Yang Diselenggarakan Oleh Gubernur Jawa Tengah</p>
            </div>
        
            <div class="box">
                <i class="fa-solid fa-medal"></i>
                <span>2022</span>
                <h3>Juara 3 UNM </h3>
                <p>Memenangkan Kejuaraan Yang Diselenggarakan Oleh Pihak Kampus UNM</p>
            </div>
    

    </section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> varelnajwan123@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> 0838-1525-4966 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> depok, INDONESIA  </h3>
        </div>

    </div>

    <form action="">

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->




<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




</body>
</html>