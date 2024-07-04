<?php
require_once 'admin/controller/db_connect.php';

$query = $conn->query("SELECT * FROM photos WHERE type = 'produk'");
$query2 = $conn->query("SELECT * FROM photos WHERE type = 'menu'");

$data = [];
while ($row = $query->fetch_assoc()) {
    $data[] = $row;
}
$data2 = [];
while ($row2 = $query2->fetch_assoc()) {
    $data2[] = $row2;
}

// var_dump($data);die;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatamorgana Coffee House</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include('BaseTemplate/header.php'); ?>

    <main>
        <div class="hero" id="home">
            <img src="public/images/logo2-Clean.png" alt="Foto Kafe" class="hero-image">
        </div>
        <!-- <div class="jambuka">
            <img src="public/images/jadwalFix.png" alt="Foto Kafe" class="jambuka-image">
        </div> -->


        <section class="menu mt-5 mb-5 p-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data2 as $item2) : ?>
                        <div class="col-5">
                            <div><img src="admin/public/img/galeri/<?= $item2['photo_url'] ?>" class="img-fluid rounded-5" ></div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <section class="products">
            <h2 id="coffe">Our Coffee</h2>
            <div class="slideshow">
                <?php foreach ($data as $item) : ?>
                    <div class="slide"><img src="admin/public/img/galeri/<?= $item['photo_url'] ?>" class="slide-image"></div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <?php
    include('BaseTemplate/footer.php');
    ?>



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>