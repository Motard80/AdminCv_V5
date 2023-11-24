<?php
include_once '../src/controleur/subDomain/subDomainCtrl.php';
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
                <h1>Sous domaines de compétences </h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sous Domaines </th>
                        <th scope="col">Domaine</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($subDomain as $listDomain => $valusSubDomain) { ?>
                        <tr>
                            <td><?= $valusSubDomain['SubDomaineName'] ?></td>
                            <td><?= $valusSubDomain['DomainName'] ?></td>
                            <td><a href="?p=updateSubDomain&id=<?= $valusSubDomain['idSubDomaine'] ?>">modifier</a></td>
                            <td><a href="?p=deleteSubDomain&id=<?= $valusSubDomain['idSubDomaine'] ?>">supprimer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <a href="?p=addSubDoamain" alt="ajout d'un sous domaine" title="addSubDomain" > ajouter un sous-domaine</a>
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