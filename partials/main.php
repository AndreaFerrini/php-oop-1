<?php

include __DIR__ . "/../film.php";

$primo_film = new Film( "Le Ali della Libertà", 1994, "Drammatico", 142 );

?>

<main class=""container>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $primo_film->titolo ?></h5>
            <h4><?php echo $primo_film->anno ?></h4>
            <h5><?php echo $primo_film->genere ?></h5>
            <h6><?php echo $primo_film->durata ?></h6>
        </div>
    </div>
</main>