<?php
if (isset($_GET['fat'])) {
    $num = intval($_GET['fat']);
    $res = 1;

    for ($i = $num; $i > 1; $i--) {
        $res *= $i;
    }

    echo '<script>alert("O fatorial de '.$num.' é: ' . $res . '")</script>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/atv.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Fator</title>
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
                            <a class="nav-link" aria-current="page" href="../index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="lerNum.php">5 num</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pop.php">População</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pI.php">Intervalo IP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="tab.php">Tabuada</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="eleva.php">Potência</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="fat.php">Fatorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="pII.php">Contagem IP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <form method="get">
                <label for="n1" class="form-label">Digite um número para fatorar:</label>

                <div class="mb-3">
                    <input type="number" class="form-control" id="fat" name="fat" aria-describedby="fat" placeholder="Número" required min="1">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Calcular</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </section>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>