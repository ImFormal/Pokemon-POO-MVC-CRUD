<div class="card 
    <?= ($pokemon['type'] === 'plant' ? 'plantShadow' : ($pokemon['type'] === 'water' ? 'waterShadow' : 'fireShadow')) ?>"
    style="width: 18rem;">

  <img src="public/images/pokemon/<?=$pokemon['image']?>" class="card-img-top" alt="<?$pokemon['name']?>">
  <div class="card-body">

    <h5 class="card-title"><?=$pokemon['name'] ?></h5>

    <p class="card-text d-flex justify-content-between">
        <span><b>Santé</b></span>
        <span><?=$pokemon['health']?> PV</span>
    </p>

    <p class="card-text d-flex justify-content-between">
        <span><b>Attaque</b></span>
        <span><?=$pokemon['attack']?> Damages</span>
    </p>

    <p class="card-text d-flex justify-content-between">
        <span><b>Attaque Spé</b></span>
        <span><?=$pokemon['attackspe']?> Damages</span>
    </p>

    <div class="d-flex justify-content-between">
        <form action="updateCard" method="POST">
            <input type="hidden" value="<?=$pokemon['id']?>" name="id">
            <button class="btn btn-primary">Modifier</button>
        </form>

        <form action="deleteCard" method="POST">
            <input type="hidden" value="<?=$pokemon['id']?>" name="id">
            <button class="btn btn-danger">Supprimer</button>
        </form>
    </div>
  </div>
</div>