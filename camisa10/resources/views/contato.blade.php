<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quem Somos - Santos FC</title>

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
    </nav>
</header>

<main>
    <div class="container marketing">
        <hr class="featurette-divider">

    <!-- Formulário de Contato -->
    <section class="container">
    <h1>Formulário de Contato</h1><br>
    <form method="POST" action="{{ route('contato.enviar') }}">
      @csrf
      <div class="form-group">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" class="form-control"><br>
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control"><br>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" class="form-control"><br>
      </div>
      <div class="form-group">
        <label for="sexo">Sexo:</label><br>
        <select name="sexo" id="sexo" class="form-control">
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
        </select>
      </div>
      <br><button type="submit" class="btn btn-primary">Enviar</button>
    </form>

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
