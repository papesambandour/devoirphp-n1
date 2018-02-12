<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    <link rel="stylesheet" href="public/app.css">

    <title><?=$title ?></title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header" style="margin-right: 100px;margin-left: 100px;">
                <a class="navbar-brand" href="/">Sen Gestion User</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/">Accueil</a></li>
                <li><a href="?page=listroles">Liste Roles</a></li>
                <li><a href="?page=listuser">Liste User</a></li>
                <li><a href="?page=addroles">Ajouter Role</a></li>
                <li><a href="?page=adduser">Ajouter User</a></li>
                <li><a href="?page=adduserroles">Ajouter Role User</a></li>
                <li><a href="?page=listuserroles">Liste Role User</a></li>


            </ul>
        </div>
    </nav>
    <div class="container">
        <?php \helper\flashError() ; \helper\flashSuccess() ?>
        <?= $__CONTENT__ ?>
    </div>
    <footer>

    </footer>
    <script src="public/jquery-3.2.1.min.js"></script>
<script src="public/app.js"></script>
</body>
</html>

<?php
