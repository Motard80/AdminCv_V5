<?php
include_once '../src/controleur/skills/skillsCtrl.php';
?>
<title><?= isset($title) ? $title : '' ?></title>
</head>

<body>
    <header>
        <?php
        if (isset($_SESSION['Valid']) && $_SESSION['Valid'] === 'OK' && $_SESSION['Auth'] === 'All' && $_SESSION['G1'] === $Ay) {
            include_once '../src/include/Navbar.php'; ?>
            ?>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
                <h1>Compétences professionnelles </h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-sel-start">
        </div>
        <div class="col align-self-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Description </th>
                        <th scope="col">Sous domaines</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($skills as $skillsList => $valusSkills) { ?>
                        <tr>
                            <td><?= $valusSkills['Description'] ?></td>
                            <td><?= $valusSkills['SubDomaineName'] ?></td>
                            <td><a href="?p=udapteSkills&id=<?= $valusSkills['idSkills'] ?>">modifier</a></td>
                            <td><a href="?p=deleteSkills&id=<?= $valusSkills['idSkills'] ?>">supprimer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <a href="?p=addSkills">Ajout d'une compétence professionnelle</a>
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