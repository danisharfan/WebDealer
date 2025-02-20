<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services - Honda</title>
    <meta charset="UTF-8">
    <meta name="description" content="Layanan Resmi Honda">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        body {
            padding-top: 60px;
        }
        
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .service-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .service-card img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        header {
            text-align: center;
            padding: 80px 0 20px;
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
            <li><a href="services.php?page=Services">Services</a></li>
        </ul>
    </nav>
    <h1 class="title">Layanan Resmi Honda</h1>
    <h3 class="desc">Pelayanan terbaik untuk kendaraan Anda</h3>
</header>

<div class="container">
    <div class="service-grid">
        <div class="service-card">
            <div class="service-icon">🚗</div>
            <h2>Servis Berkala</h2>
            <p>Pastikan kendaraan Anda tetap dalam kondisi terbaik dengan servis berkala dari Honda.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">🔧</div>
            <h2>Perbaikan</h2>
            <p>Layanan perbaikan profesional untuk segala kebutuhan kendaraan Anda.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">📞</div>
            <h2>Layanan Darurat</h2>
            <p>Hubungi kami kapan saja untuk layanan darurat dan bantuan di jalan.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="service-grid">
        <div class="service-card">
            <div class="service-icon">🛠️</div>
            <h2>Ganti Suku Cadang</h2>
            <p>Gunakan suku cadang asli Honda untuk performa terbaik kendaraan Anda.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">🛡️</div>
            <h2>Garansi Kendaraan</h2>
            <p>Nikmati perlindungan garansi resmi Honda untuk ketenangan berkendara.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">⛽</div>
            <h2>Efisiensi Bahan Bakar</h2>
            <p>Konsultasikan cara mengoptimalkan efisiensi bahan bakar kendaraan Anda.</p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Honda Services</p>
</footer>
</body>
</html>
