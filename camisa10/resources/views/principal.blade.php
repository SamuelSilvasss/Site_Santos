<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Santos FC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #000; /* Fundo preto */
            color: #fff; /* Texto branco */
        }
        .navbar {
            background-color: #000 !important; /* Barra de navegação preta */
        }
        .nav-link {
            color: #fff !important; /* Texto branco nos links da navegação */
        }
        .btn-danger {
            background-color: #000; /* Botões pretos */
            border-color: #fff; /* Borda branca */
            color: #fff; /* Texto branco nos botões */
        }
        .btn-outline-secondary {
            color: #fff; /* Texto branco nos botões de contorno secundário */
        }
        .input-group-text {
            background-color: #000; /* Fundo preto para os inputs de grupo */
            border-color: #fff; /* Borda branca */
            color: #fff; /* Texto branco */
        }
        .form-control {
            background-color: #000; /* Fundo preto para os inputs */
            border-color: #fff; /* Borda branca */
            color: #fff; /* Texto branco */
        }
        .featurette-divider {
            border-color: #fff; /* Linhas divisórias brancas */
        }
        .btn-danger:hover {
            background-color: #333; /* Alterar a cor do botão ao passar o mouse */
            border-color: #fff; /* Borda branca */
        }
        .navbar-toggler-icon {
            background-color: #fff; /* Ícone de navegação do menu hamburguer na barra de navegação */
        }
    </style>
</head>
<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/peixe.png" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <ul class="navbar-nav mx-auto mb-2 mb-md-0 nav-links align-items-center">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('principal') }}"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('principal') }}"></a>
                </li>
                    <a class="nav-link active" aria-current="page" href="{{ route('principal') }}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('principal') }}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('quemsomos') }}">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('contato') }}">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('contato') }}">Clube</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('contato') }}">Elenco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('contato') }}">História</a>
                </li>   
                </ul>
                <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
    </form>

            </div>
        </div>
    </nav>
</header>

<main>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/torcida.png" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Santos Futebol Clube</h1>
                        <p class="opacity-75" style="color: #ffffff;">Conheça o Santos FC: A paixão que vem do peito, o orgulho que não tem preço.</p>
                    </div>
                </div>
            </div>
<div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Aprendizados para além da sala de aula.<br> <br> <span class="text-body-secondary"></span></h2>
            <p class="lead">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
            <a href="oportunidades" class="btn btn-danger">CONHEÇA NOSSAS OPORTUNIDADES</a>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <image xlink:href="images/socio.png" width="100%" height="100%" />
                <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
            </svg>
        </div>
    </div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">NO SANTOS, TODO SÓCIO É REI<br> <br> <span class="text-body-secondary"></span></h2>
        <p class="lead">Só quem é Sócio Rei tem prioridade e desconto para comprar ingressos, vantagens em nossos parceiros, possibilidade de participar de experiências incríveis, acesso a conteúdos exclusivos e muito mais.</p>
        <a href="https://sociorei.com/Planos" class="btn btn-danger">ASSINE UM PLANO</a>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <image xlink:href="images/socio.png" width="80%" height="100%" />
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
        </svg>
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">CONFIRA AS INFORMAÇÕES DE ACESSO AO ESTÁDIO DO CAFÉ.<br><br> <span class="text-body-secondary"></span></h2>
        <p class="lead">O Santos FC enfrenta o Botafogo-SP na próxima segunda-feira (3), no Estádio do Café, em Londrina, e os ingressos estão a venda pelo site: </p>
        <a href="https://www.bilheteriadigital.com/03-06-brasileirao-serie-b-santos-sp-x-botafogo-sp-03-de-junho" class="btn btn-danger">ADQUIRA SEU INGRESSO</a>
    </div>
    <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <image xlink:href="images/tubas.png" width="80%" height="100%" />
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
        </svg>
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">SANTOS STORE<br><br> <span class="text-body-secondary"></span></h2>
        <p class="lead">Loja Oficial do Santos Futebol Clube. Toda a Linha Oficial de Produtos do Peixão Você Encontra Aqui. Entrega em Todo o Brasil.</p>
        <a href="https://www.santosstore.com.br/" class="btn btn-danger">GARANTA JÁ A SUA CAMISA</a>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <image xlink:href="images/joaquin.png" width="80%" height="100%" />
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
        </svg>
    </div>
</div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
    <div class="d-flex justify-content-between align-items-center">
        <p class="mb-0">&copy; 2024 Santos Sempre Santos.</p>
        <div class="d-flex">
            <a href="https://www.facebook.com/santosfc/?locale=pt_BR"><img src="images/face.png" alt="Facebook" width="40" height="40"></a>
            <a href="https://www.youtube.com/channel/UC0uRT_armQXqds_rjTjqJ0g"><img src="images/youtube.png" alt="YouTube" width="45" height="45"></a>
            <a href="https://www.instagram.com/santosfc/"><img src="images/insta.png" alt="Instagram" width="40" height="40"></a>
        </div>
    </div>
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
