<?php

include_once '../src/controleur/identity/displayIdentityCtrl.php';
include_once '../src/class/otherClass/Autoloder.php';
AutoLoader::register();
?>
<title><?= isset($title) ? $title : '' ?></title>
</head>
<body> 
       <header>
        <?php 
        if(isset($_SESSION['Valid']) && $_SESSION['Valid']==='OK' && $_SESSION['Auth']=== 'All' && $_SESSION['G1']=== $Ay){
            include_once '../src/include/Navbar.php'; ?>
?>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
                <h1>Informations sur l'identité/adresse </h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Informations</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    <tr>
                        <td><?= $Information['pseudo'] ?></td>
                        <td><a href="?p=updateIdentity&id=<?= $Information['id'] ?>&valus=pseudo">Modifier</a></td>
                        <td><a href="?p=deleteIdentity&id=<?= $Information['id'] ?>&valus=pseudo">supprimer</a></td>
                    </tr>
                    <tr>
                        <td><?= $Information['ContactPhone'] ?></td>
                        <td><a href="?p=updateIdentity&id=<?= $Information['id'] ?>&valus=ContactPhone">Modifier</a></td>
                        <td><a href="?p=deleteIdentity&id=<?= $Information['id'] ?>&valus=ContactPhone">supprimer</a></td>
                    </tr>
                    <tr>
                        <td><?= $Information['CompagnyAddress'] ?></td>
                        <td><a href="?p=updateIdentity&id=<?= $Information['id'] ?>&valus=CompagnyAddress">Modifier</a></td>
                        <td><a href="?p=deleteIdentity&id=<?= $Information['id'] ?>&valus=CompagnyAddress">supprimer</a></td>
                    </tr>
                    <tr>
                        <td><?= $Information['ZipCode'] ?></td>
                        <td><a href="?p=updateIdentity&id=<?= $Information['id'] ?>&valus=ZipCode ">Modifier</a></td>
                        <td><a href="?p=deleteIdentity&id=<?= $Information['id'] ?>&valus=ZipCode ">supprimer</a></td>
                    </tr>
                    <tr>
                        <td><?= $Information['City'] ?></td>
                        <td><a href="?p=updateIdentity&id=<?= $Information['id'] ?>&valus=City ">Modifier</a></td>
                        <td><a href="?p=deleteIdentity&id=<?= $Information['id'] ?>&valus=City ">supprimer</a></td>
                    </tr>
                    <tr>
                        <td><?= $Information['Mail'] ?></td>
                        <td><a href="?p=updateIdentity&id=<?= $Information['id'] ?>&valus=Mail ">Modifier</a></td>
                        <td><a href="?p=deleteIdentity&id=<?= $Information['id'] ?>&valus=Mail ">supprimer</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>