<?php


    $bd = new SQLite3("filmes.db");

    $sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
        )
";

    if ($bd->exec($sql)) 
        echo "tabela filmes criada\n";
    else
        echo "ERRRROOOOOOOOOOOOOOO"


?>
