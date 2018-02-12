
<h1 class="h1" style="margin-bottom: 30px; text-align: center;"> La Liste des Roles User</h1>

<div class="panel panel-primary">
    <div class="panel-heading">Liste des Roles User</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>Nom de User</th>
                <th>Nom du Role</th>
                <th>Edite</th>
                <th>Supprimer</th>
            </tr>
            <?php
            while ($ligne = mysqli_fetch_object($listRolesUser))
            {
                echo "<tr>
                            <td>$ligne->prenom $ligne->nom </td>
                            <td>$ligne->libR</td>
                            <td>
                                <form method='post' action='?page=edituserroles'> 
                                        <input type='hidden' name='idR' value='".$ligne->idR."'>
                                        <input type='hidden' name='idU' value='".$ligne->idU."'>
                                        <input type='submit' value='Editer' class='btn btn-success'>
                                  </form>
                            </td>
                            <td>
                                <form method='post' action='?page=deluserroles'> 
                                        <input type='hidden' name='idR' value='".$ligne->idR."'>
                                         <input type='hidden' name='idU' value='".$ligne->idR."'>
                                        <input type='submit' name ='supripmer' value='Supprimer' class='btn btn-danger' onclick='return confirmation()'>
                                 </form>
                            </td>
                         </tr>" ;
            }
            ?>

        </table>
    </div>
</div>

