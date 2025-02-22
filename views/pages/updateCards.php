<h1 class="text-center mb-4">Modifier une carte</h1>

<form action="updateNewCard" method="POST">
    <input type="hidden" value="<?= $pokemon['id'] ?>" name="id">

    <div class="mb-3">
        <label for="image" class="form-label">Image du Pokemon</label>
        <input type="text" class="form-control" id="image" value="<?=$pokemon['image']?>" name="image" required> 
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nom du Pokemon</label>
        <input type="text" class="form-control" id="name" value="<?=$pokemon['name']?>" name="name" required> 
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Type du Pokemon</label>
        <select name="type" id="type" type="text" class="form-select" required>
            <?php foreach($types as $type) : ?>
                <option value="<?=$type['type'] ?>" <?=$type['type']===$pokemon['type'] ? 'selected' : ''?>>
                    <?=$type['type'] ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="health" class="form-label">HP du Pokemon</label>
        <input type="number" class="form-control" id="health" value="<?=$pokemon['health']?>" name="health" required> 
    </div>

    <div class="mb-3">
        <label for="attack" class="form-label">Dégats d'attaque du Pokemon</label>
        <input type="number" class="form-control" id="attack" value="<?=$pokemon['attack']?>" name="attack" required> 
    </div>

    <div class="mb-3">
        <label for="attackspe" class="form-label">Dégats d'attaque spéciale du Pokemon</label>
        <input type="number" class="form-control" id="attackspe" value="<?=$pokemon['attackspe']?>" name="attackspe" required> 
    </div>

    <button type="submit" class="btn btn-primary mt-3 w-100">Modifier la carte</button>
</form>