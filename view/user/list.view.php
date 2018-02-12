
<h1 class="h1" style="margin-bottom: 30px; text-align: center;"> La Liste des Serveur</h1>

<div class="panel panel-primary">
    <div class="panel-heading">Liste des serveur</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>Identification </th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Login</th>
                <th>Password</th>
                <th>Edite</th>
                <th>Supprimer</th>
            </tr>
            <?php
            while ($ligne = mysqli_fetch_object($listUser))
            {
                echo "<tr>
                            <td>$ligne->idU</td>
                            <td>$ligne->nom</td>
                            <td>$ligne->prenom</td>
                            <td>$ligne->login</td>
                            <td>$ligne->password</td>
                            <td>
                                <form method='post' action='?page=edituser'> 
                                        <input type='hidden' name='id' value='".$ligne->idU."'>
                                        <input type='submit' value='Editer' class='btn btn-success'>
                                  </form>
                            </td>
                            <td>
                                <form method='post' action='?page=deluser'> 
                                        <input type='hidden' name='id' value='".$ligne->idU."'>
                                        <input type='submit' name ='supripmer' value='Supprimer' class='btn btn-danger' onclick='return confirmation()'>
                                 </form>
                            </td>
                         </tr>" ;
            }
            ?>

        </table>
    </div>
</div>

