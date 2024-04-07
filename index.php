<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu principal</title>
</head>

<body class="bg-dark-subtle ">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">S.W.2</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="pages/lerNum.php">5 num</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pages/pop.php">População</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pages/pI.php">Intervalo IP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pages/tab.php">Tabuada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pages/eleva.php">Potência</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pages/fat.php">Fatorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pages/pII.php">Contagem IP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="lista">
            <a href="pages/lerNum.php" class="btn btn-primary">Ler 5 números</a>
            <a href="pages/pop.php" class="btn btn-primary">População país</a>
            <a href="pages/pII.php" class="btn btn-primary">Pares e Ímpares com intervalo</a>
            <a href="pages/tab.php" class="btn btn-primary">Tabuada</a>
            <a href="pages/eleva.php" class="btn btn-primary">Elevação</a>
            <a href="pages/pI.php" class="btn btn-primary">Pares e Ímpares</a>

        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>