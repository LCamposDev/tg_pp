<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Usuario
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?page=novo">Cadastrar</a></li>
                    <li><a class="dropdown-item" href="?page=listar">Listar</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Produto
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                    <li><a class="dropdown-item" href="#">Listar</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vendas
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                    <li><a class="dropdown-item" href="#">Listar</a></li>
                </ul>
                </li>
            </ul>
        </div>
        </div>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]) {
                    case "novo":
                        include("novo-usuario.php");
                    break;
                    case "listar":
                        include("listar-usuario.php");
                    break;
                    case "salvar":
                        include("salvar-usuario.php");
                    break;
                    case "editar":
                        include("editar-usuario.php");
                    break;
                    default:
                        print "<h1>Bem Vindo!</h1>";
                }
            ?>
            </div>
        </div>            
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>