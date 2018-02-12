
<h1 class="h1" style="margin-bottom: 30px; text-align: center;">Editer Un Role User</h1>

<div class="panel panel-info">
    <div class="panel-heading"> Formulaire d'edition de Role User</div>
    <div class="panel-body">
        <form method="post" action="?page=saveuserroles" class="form-group">

            <div class="form-group">
                <label class="control-label">Nom du Role</label>
                <input type="hidden" name="idR_init" value="<?= $idR?>">
                <input type="hidden" name="idU_init" value="<?= $idU?>">
                <select name="idR">
                    <?php
                    while ($ligne1 = mysqli_fetch_object($roles))
                    {
                        echo "<option value='".(int)$ligne1->idR."' ";
                        if($ligne1->idR == $idR)
                        {
                            echo "selected" ;
                        }

                        echo "> $ligne1->libR </option>";
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
                        echo "<option value='".(int)$ligne2->idU."' ";
                        if($ligne2->idU == $idU)
                        {
                            echo "selected" ;
                        }
                        echo "> $ligne2->nom" ." " . "$ligne2->prenom  </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="editer"> Enregistrer</button>
                <button class="btn btn-primary" type="reset" name="annuler"> Annuler</button>
            </div>

        </form>
    </div>
</div>