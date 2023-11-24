<?php
include_once '../src/controleur/profetionalCompetence/profcompetenceCtrl.php';
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
                <h1>Experiences professionnelles </h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom </th>
                        <th scope="col">Date de début</th>
                        <th scope="col">Date de fin </th>
                        <th scope="col">Entreprise </th>
                        <th scope="col">Description </th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($proExperience as $listProexperi=>$valusProexp){ ?>
                    <tr>
                        <td><?= $valusProexp['JobName'] ?></td>
                        <td><?= $valusProexp['StartDate'] ?></td>
                        <td><?= $valusProexp['EndDate'] ?></td>
                        <td><?= $valusProexp['Compagny'] ?></td>
                        <td><?= $valusProexp['JobDescription'] ?></td>
                        <td><a href="?p=updateProExper&id=<?= $valusProexp['id'] ?>">modifier</a></td>
                        <td><a href="?p=deleteProExper&id=<?= $valusProexp['id'] ?>">supprimer</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <a href="?p=addExPro" class="">Ajouter une experience professionnelle</a>
                        </td>
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