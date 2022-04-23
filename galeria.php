<?php  include "cabecalho.php"?>

<?php
$filme1 = [
    "titulo"=>"Vingadores: Ultimato", 
    "nota" => 8.6, 
    "sinopse" => "Melhor filme de heróis do mundo",
    "poster" => "https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];
?>

<?php
$filme2 = [
    "titulo"=>"Batman", 
    "nota" => 4, 
    "sinopse" => "Só o batima",
    "poster" => "https://www.themoviedb.org/t/p/w300/wd7b4Nv9QBHDTIjc2m7sr0IUMoh.jpg"
];

$filmes = [$filme1, $filme2];

?>



<body>

    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php" >Galeria</a></li>
                <li class="bla"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>

        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
                <li class="tab"><a class="active" href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">

        <?php foreach($filmes as $filme) : ?>
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme["poster"] ?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
                        </p>
                        <span class="card-title"><?= $filme["titulo"] ?></span>
                        <p><?= $filme["sinopse"] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

</body>

</html>