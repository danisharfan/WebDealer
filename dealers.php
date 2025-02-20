<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dealers - Honda</title>
    <meta charset="UTF-8">
    <meta name="description" content="Daftar Dealer Resmi Honda">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        body {
            padding-top: 60px; /* Tambahkan padding agar tidak tertutup navigasi */
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .product-card img {
            width: 80%;
            max-width: 300px;
            height: auto;
            border-radius: 10px;
        }
        header {
            text-align: center;
            padding: 80px 0 20px; /* Tambahkan padding atas agar judul tidak tertutup */
        }
    </style>
</head>
<body>
<header>
    <nav id="navigation" style="position: fixed; top: 0; width: 100%; background-color: #0d5bcf; padding: 10px 0; z-index: 1000; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
        <ul>
            <li><a href="index.php?page=Home">Home</a></li>
            <li><a href="products.php?page=Products">Products</a></li>
            <li><a href="dealers.php?page=Dealers">Dealers</a></li>
            <li><a href="./services.php?page=Services">Services</a></li>
        </ul>
    </nav>
    <h1 class="title">Daftar Dealer Resmi Honda</h1>
    <h3 class="desc">Temukan dealer terdekat untuk layanan terbaik</h3>
</header>

<div class="container">
    <div class="product-grid">
        <div class="product-card">
            <img src="img/honda.svg" alt="Dealer Honda 1">
            <h2>Honda Dealer Jakarta</h2>
            <p>Jl. Sudirman No. 45, Jakarta</p>
            <p><strong>Telp:</strong> (021) 12345678</p>
        </div>
        
        <div class="product-card">
            <img src="img/honda.svg" alt="Dealer Honda 2">
            <h2>Honda Dealer Bandung</h2>
            <p>Jl. Asia Afrika No. 21, Bandung</p>
            <p><strong>Telp:</strong> (022) 87654321</p>
        </div>

        <div class="product-card">
            <img src="img/honda.svg" alt="Dealer Honda 3">
            <h2>Honda Dealer Surabaya</h2>
            <p>Jl. Ahmad Yani No. 67, Surabaya</p>
            <p><strong>Telp:</strong> (031) 13579111</p>
        </div>
        
    </div>
</div>

<footer>
    <p>&copy; 2024 Honda Dealers</p>
</footer>
</body>
</html>
