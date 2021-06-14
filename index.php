<?php include "./includes/head.php" ?>

<body data-spy="scroll" data-target="#navbar" data-offset="100.8">

    <?php include "./includes/header.php" ?>

    <!-- Main -->
    <main id="main">
        <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/1.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/2.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/3.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/4.jpg" class="d-block w-100 h-100" alt="...">
                </div>

            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 offset-md-6 text-end  text-center  text-md-end ">
                            <!-- con el offset  corremos una cantidad de columnas a la derecha-->
                            <h1> Huevo Orgánico</h1>
                            <p class="d-none d-md-block ">Nuestro método de crianza permite a las gallinas recibir una alimentación natural, respirar aire fresco y desplazarse libremente por el campo para recibir rayos solares. Esto origina que las aves tengan una vida sin estrés
                                y un mejor sistema inmunológico, lo cual elimina la necesidad de usar antibióticos. Además, las alimentamos con insumos locales y naturales, como el maíz y alfalfa de agricultores peruanos.</p>
                            <a href="#" class="btn btn-outline-light">Quiero ver los productos</a>
                            <button type="button" class="btn btn-prova">Comprar huevos ecologicos </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->

    <!-- Encuentranos -->
    <section id="place">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 ps-0 pe-0">
                    <img src="assets/img/prova.jpg" alt="">
                </div>
                <div class="col-12  col-lg-6 pt-4 pb-4">
                    <h2>
                        Filosofia
                    </h2>
                    <p>
                    Arthur,CEO -Co founder, a sus 22 años descubrió que las gallinas ponedoras sufren un sinfín de maltratos en las granjas avícolas, por lo que decidió luchar contra esta realidad y comenzar una granja donde las gallinas vivan libres, felices, y alimentadas con insumos más naturales, lo cual resulta en huevos más nutritivos y saludables.
                    </p>
                    <a href="#" class="btn btn-outline-light">Conoce más</a>
                </div>

            </div>
        </div>

    </section>
    <!-- /Encuentranos -->



 <?php include "./includes/footer.php " ?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="index.js"></script>
</body>

</html>