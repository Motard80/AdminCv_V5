<?php
include_once '../src/controleur/trainning/trainnigCtrl.php';
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
                <h1>Formations </h1>
            </div>
            </div>
            <div class="row"></div>
            <div class="col align-self-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom  </th>
                        <th scope="col">Date de début</th>
                        <th scope="col">Date de fin</th>
                        <th scope="col">Ecole</th>
                        <th scope="col">niveau</th>
                        <th scope="col">Description</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach($trainning as $istTrainning=>$valusTrainning){ ?>
                    <tr>
                        <td><?= $valusTrainning['Name'] ?></td>
                        <td><?= $valusTrainning['StartDate'] ?></td>
                        <td><?= $valusTrainning['EndDate'] ?></td>
                        <td><?= $valusTrainning['School'] ?></td>
                        <td><?= $valusTrainning['Level'] ?></td>
                        <td><?= $valusTrainning['Description'] ?></td>
                        <td><a href="?p=udpdateTrainning&id=<?= $valusTrainning['id'] ?>">modifier</a></td>
                        <td><a href="?p=deleteTraining&id=<?= $valusTrainning['id'] ?>">supprimer</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            <td>
                                <a href="?p=addTrainning" class="lien">Ajouter une formation</a>
                            </td>
                        </th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>