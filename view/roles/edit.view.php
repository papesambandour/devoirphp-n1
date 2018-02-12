
<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Editer Un Role</h1>

<div class="panel panel-info">
    <div class="panel-heading"> Formulaire d'ajout d'edition de Role</div>
    <div class="panel-body">
        <form method="post" action="?page=saveroles" class="form-group">
            <div class="form-group">
                <label for="role" class="control-label">Libete du Role</label>
                <input type="text" name="libR" id="role" required="required" class="form-control" value="<?= $role->libR?>"/>
                <input type="hidden" name="idR" value="<?= $role->idR?>">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="editer"> Enregistrer</button>
                <button class="btn btn-primary" type="reset" name="annuler"> Annuler</button>
            </div>

        </form>
    </div>
</div>