<h1 class="text-center mb-4">Ajouter une carte</h1>

<form action="createNewCard" method="POST">
    <div class="mb-3">
        <label for="image" class="form-label">Image du Pokemon</label>
        <input type="text" class="form-control" id="image" placeholder="Entrer l'image du Pokemon" name="image" required> 
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nom du Pokemon</label>
        <input type="text" class="form-control" id="name" placeholder="Entrer le nom du Pokemon" name="name" required> 
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Type du Pokemon</label>
        <select name="type" id="type" type="text" class="form-select" required>
            <option disabled selected>⬇️ Choisis le type du Pokemon ⬇️</option>
            <?php foreach($types as $type) : ?>
                <option value="<?=$type['type'] ?>"><?=$type['type'] ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="health" class="form-label">HP du Pokemon</label>
        <input type="number" class="form-control" id="health" placeholder="Entrer les points de vie du Pokemon" name="health" required> 
    </div>

    <div class="mb-3">
        <label for="attack" class="form-label">Dégats d'attaque du Pokemon</label>
        <input type="number" class="form-control" id="attack" placeholder="Entrer les points de dommage d'attaque du Pokemon" name="attack" required> 
    </div>

    <div class="mb-3">
        <label for="attackspe" class="form-label">Dégats d'attaque spéciale du Pokemon</label>
        <input type="number" class="form-control" id="attackspe" placeholder="Entrer les points de dommage d'attaque spéciale du Pokemon" name="attackspe" required> 
    </div>

    <button type="submit" class="btn btn-primary mt-3 w-100">Créer la carte</button>
</form>