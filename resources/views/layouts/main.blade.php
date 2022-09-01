<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome.css">
</head>

<body>
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid mainspace">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" alt="Global Centro de Visto" width="220" height="40"
                    class="d-inline-block
                                align-text-top"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/about">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/premium">Serviços Premium</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END HEADER -->

    @yield('content')

    <footer class="text-lg-start bg-light text-muted">
        <!-- Section: Links  -->
        <section class="mainspace padtop50">
            <div class="container text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Global Visa Center
                        </h6>
                        <p>A VS Global é uma prestadora oficial de processamento de serviços consulares independente e
                            vistos, autorizado a prover serviços de apoio administrativo a
                            requerentes de vistos em Angola.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Links UTEIS
                        </h6>
                        <p>
                            <a href="#!" class="footer-link">Agendamentos</a>
                        </p>
                        <p>
                            <a href="/about" class="footer-link">Sobre Nós</a>
                        </p>
                        <p>
                            <a href="/contact" class="footer-link">Contactos</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Outros links
                        </h6>
                        <p>
                            <a href="#!" class="footer-link">Baixar Formulario</a>
                        </p>
                        <p>
                            <a href="#!" class="footer-link">Pedidos</a>
                        </p>
                        <p>
                            <a href="#!" class="footer-link">Ajuda</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0
                            mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contactos
                        </h6>
                        <p>Sede: Condomínio Bengo, Bloco A9. Luanda - Angola</p>
                        <p>info@vistocanada.com</p>
                        <p>+244 123 456 789</p>
                        <p> +244 123 456 789</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0,
                0.05);">
            Desenvolvido pela <strong>Crie Digital</strong> &copy; 2022 Copyright | Todos os direitos reservados.
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
