<?php
if (!empty($_GET)) {
    $par = 0;
    $impar = 0;

    for ($i = 1; $i <= 10; $i++) {
        if (isset($_GET['n' . $i]) && $_GET['n' . $i] != null) {
            if ($_GET['n' . $i] % 2 == 0) {
                $par++;
            } else {
                $impar++;
            }
        }
    }

    // Exibe um alerta com a quantidade de números pares e ímpares
    echo '<script>alert("Quantidade de números pares: ' . $par . ' || Quantidade de números ímpares: ' . $impar . '")</script>';
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/atv.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ler Num</title>
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
                            <a class="nav-link " aria-current="page" href="fat.php">Fatorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pII.php">Contagem IP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <form method="get">
                <label for="n1" class="form-label">Digite os dez números:</label>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n1" name="n1" aria-describedby="n1" placeholder="Primeiro número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n2" name="n2" aria-describedby="n2" placeholder="Segundo número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n3" name="n3" aria-describedby="n3" placeholder="Terceiro número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n4" name="n4" aria-describedby="n4" placeholder="Quarto número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n5" name="n5" aria-describedby="n5" placeholder="Quinto número">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="n6" name="n6" aria-describedby="n6" placeholder="Sexto número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n7" name="n7" aria-describedby="n7" placeholder="Sétimo número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n8" name="n8" aria-describedby="n8" placeholder="Oitavo número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n9" name="n9" aria-describedby="n9" placeholder="Nono número">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="n10" name="n10" aria-describedby="n10" placeholder="Décimo número">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Verificar</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </section>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>