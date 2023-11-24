<?php
include_once '../src/controleur/domain/domainCtrl.php';
?>
<title><?= isset($title) ? $title : '' ?></title>
</head>

<body>
    <header>
        <?php
                if(isset($_SESSION['Valid']) && $_SESSION['Valid']==='OK' && $_SESSION['Auth']=== 'All' && $_SESSION['G1']=== $Ay){
         include_once '../src/include/Navbar.php'; ?>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-center">
                <h1> domaine de compétence </h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Domaine </th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach($dommain as $domainListe=>$valusDomain){ ?>
                    <tr>
                        <td><?= $valusDomain['DomainName'] ?></td>
                        <td><a href="?p=updateDomain&id=<?= $valusDomain['id'] ?>">modifier</a></td>
                        <td><a href="?p=deleteDomain&id=<?= $valusDomain['id'] ?>">supprimer</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="?p=addDomain">Ajouter un domain</a></td>
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