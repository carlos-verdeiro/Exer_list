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
                            <a class="nav-link" aria-current="page" href="pop.php">População</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pI.php">Intervalo IP</a>
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
                <label for="n1" class="form-label">Digite o intervalo de números:</label>

                <div class="mb-3">
                    <input type="number" class="form-control" id="de" name="de" aria-describedby="de" placeholder="De" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="ate" name="ate" aria-describedby="ate" placeholder="Até" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Verificar</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </section>
        <?php

        if (!empty($_GET['de']) && !empty($_GET['ate'])) {
            $de = $_GET['de'];
            $ate = $_GET['ate'];
            if ($de < $ate) {


                echo '<section>
            <div class="row" id="lista">
                <div class="col-4">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action" href="#list-item-1">Todos números</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2">Números Pares</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3">Números ímpares</a>
                    </div>
                </div>
                <div class="col-8">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0" id="lista-texto">';


                echo '<h4 id="list-item-1">Todos números</h4>
                <p>';
                for ($i = $de; $i <= $ate; $i++) {
                    echo "$i ";
                }
                echo '</p>';

                echo '<h4 id="list-item-2">Números Pares</h4>
                <p>';
                for ($i = $de; $i <= $ate; $i++) {
                    if ($i % 2 == 0) {
                        echo "$i ";
                    }
                }
                echo '</p>';

                echo '<h4 id="list-item-3">Números ímpares</h4>
                <p>';
                for ($i = $de; $i <= $ate; $i++) {
                    if ($i % 2 != 0) {
                        echo "$i ";
                    }
                }
                echo '</p>';
            } else {
                echo "<script>alert('O valor -de- deve ser menor que o valor de -até-');</script>";
            }
        }

        echo '</div>
        </div>
        </div>
        </section>';
        ?>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>