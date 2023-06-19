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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=novo-usuario">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-usuario">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Produto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=novo-produto">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-produto">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Vendas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=novo-venda">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-venda">Listar</a></li>
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
                switch (@$_REQUEST["page"]) {
                    case "novo-usuario":
                        include("novo-usuario.php");
                        break;
                    case "listar-usuario":
                        include("listar-usuario.php");
                        break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    case "editar":
                        include("editar-usuario.php");
                        break;
                    case "novo-produto":
                        include("novo-produto.php");
                        break;
                    case "listar-produto":
                        include("listar-produto.php");
                        break;
                    case "salvar-produto":
                        include("salvar-produto.php");
                        break;
                    case "novo-venda":
                        include("novo-venda.php");
                        break;
                    case "listar-venda":
                        include("listar-venda.php");
                        break;
                    case "salvar-venda":
                        include("salvar-venda.php");
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