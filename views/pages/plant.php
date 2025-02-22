<h1 class="text-center mb-4">Mes cartes de type plante</h1>

<div class="d-flex flex-wrap gap-3 justify-content-center">
    <?php foreach($pokemons as $pokemon){
        require 'views/components/card.php';
    }

    ?>
</div>
