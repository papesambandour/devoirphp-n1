<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Edition  User</h1>

<div class="panel panel-info">
    <div class="panel-heading"> Formulaire d'edition de User</div>
    <div class="panel-body">
        <form method="post" action="?page=saveuser" class="form-group">
            <div class="form-group">
                <label for="nom" class="control-label">Nom</label>
                <input type="text" name="nom" id="nom" required="required" class="form-control" value="<?= $user->nom?>"/>
                <input type="hidden" name="idU" value="<?= $user->idU?>">
            </div>
            <div class="form-group">
                <label for="prenom" class="control-label">Prenom</label>
                <input type="text" name="prenom" id="prenom" required="required" class="form-control" value="<?= $user->prenom?>"/>
            </div>
            <div class="form-group">
                <label for="login" class="control-label">Login</label>
                <input type="text" name="login" id="login" required="required" class="form-control" value="<?= $user->login?>"/>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" name="password" id="password" required="required" class="form-control" value="<?= $user->password?>"/>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="editer"> Enregistrer</button>
                <button class="btn btn-primary" type="reset" name="annuler"> Annuler</button>
            </div>

        </form>
    </div>
</div>