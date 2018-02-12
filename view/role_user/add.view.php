
<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Ajouter Un Role User</h1>

<div class="panel panel-info">
    <div class="panel-heading"> Formulaire d'ajout de Role User</div>
    <div class="panel-body">
        <form method="post" action="?page=saveuserroles" class="form-group">

            <div class="form-group">
                <label class="control-label">Nom du Role</label>
                <select name="idR">
                    <?php
                    while ($ligne1 = mysqli_fetch_object($roles))
                    {
                        echo "<option value='".(int)$ligne1->idR."'> $ligne1->libR </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Nom du User</label>
                <select name="idU">
                    <?php
                    while ($ligne2 = mysqli_fetch_object($users))
                    {
                        echo "<option value='".(int)$ligne2->idU."'> $ligne2->nom" ." " . "$ligne2->prenom  </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="valider"> Enregistrer</button>
                <button class="btn btn-primary" type="reset" name="annuler"> Annuler</button>
            </div>

        </form>
    </div>
</div>