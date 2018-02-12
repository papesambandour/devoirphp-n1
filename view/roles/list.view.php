
<h1 class="h1" style="margin-bottom: 30px; text-align: center;"> La Liste des Roles</h1>

<div class="panel panel-primary">
    <div class="panel-heading">Liste des Roles</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>Identification du Role</th>
                <th>Nom du serveur</th>
                <th>Edite</th>
                <th>Supprimer</th>
            </tr>
            <?php
            while ($ligne = mysqli_fetch_object($listRoles))
            {
                echo "<tr>
                            <td>$ligne->idR</td>
                            <td>$ligne->libR</td>
                            <td>
                                <form method='post' action='?page=editroles'> 
                                        <input type='hidden' name='id' value='".$ligne->idR."'>
                                        <input type='submit' value='Editer' class='btn btn-success'>
                                  </form>
                            </td>
                            <td>
                                <form method='post' action='?page=delroles'> 
                                        <input type='hidden' name='id' value='".$ligne->idR."'>
                                        <input type='submit' name ='supripmer' value='Supprimer' class='btn btn-danger' onclick='return confirmation()'>
                                 </form>
                            </td>
                         </tr>" ;
            }
            ?>

        </table>
    </div>
</div>

