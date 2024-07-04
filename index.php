<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatamorgana Coffee House</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <?php include('BaseTemplate/header.php'); ?>

    <main>
        <div class="hero" id="home">
            <img src="public/images/logo2-Clean.png" alt="Foto Kafe" class="hero-image">
        </div>

        <section class="menu-reservation">
            <img id="menu" src="public/images/menu.jpg" alt="Foto Kafe" class="menu-image">
            <div class="reservation-content">
                <p>Mau reservasi tempat?</p>
                <a href="create_reservasi.php" class="button">Klik disini untuk reservasi!</a>
            </div>
        </section>

        <section class="products">
            <h2 id="coffe">Our Coffee</h2>
            <div class="slideshow">
                <div class="slide"><img src="public/images/3.jpg" class="slide-image"></div>
                <div class="slide"><img src="public/images/4.jpg" class="slide-image"></div>
                <div class="slide"><img src="public/images/7.jpg" class="slide-image"></div>
            </div>
        </section>
    </main>
    <?php include('BaseTemplate/footer.php'); ?>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.querySelectorAll('.slide');
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = 'block';
            setTimeout(showSlides, 5000);
        }

        const mobileMenu = document.getElementById('mobile-menu');
        const navList = document.querySelector('.nav-list');

        mobileMenu.addEventListener('click', () => {
            navList.classList.toggle('active');
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>