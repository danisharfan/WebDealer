<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Website dengan PHP</title>
    <meta charset="UTF-8">
    <meta name="description" content="My PHP Website">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<header>
    <!-- Navigasi -->
    <nav id="navigation">
        <ul>
            <li><a href="index.php?page=Home">Home</a></li>
            <li><a href="products.php?page=Products">Products</a></li>
            <li><a href="dealers.php?page=Dealers">Dealers</a></li>
            <li><a href="services.php?page=Services">Services</a></li>
        </ul>
    </nav>
    <!-- Slideshow -->
    <div class="slideshow-container">
        <!-- Slide 1 -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/honda.webp" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <!-- Slide 2 -->
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/honda2.webp" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <!-- Slide 3 -->
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/honda3.webp" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <!-- Tombol navigasi -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- Dots navigasi -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</header>

<!-- Konten -->
<div id="contents">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include 'home.php';
                break;
            case 'VisiMisi':
                include 'VisiMisi.php';
                break;
            case 'about':
                include 'about.php';
                break;
            case 'Gallery':
                include 'Gallery.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
        }
    } else {
        
    }
    ?>
</div>

<!-- Footer -->
<footer>
        <p>&copy; 2024 Honda Dealers</p>
 </footer>

<!-- JavaScript untuk slideshow -->
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Fungsi untuk navigasi manual
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Fungsi untuk navigasi dots
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>
