<?php
include_once '../src/controleur/diploma/diplomaCtrl.php';
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
                <h1>Diplomes professionnels</h1>
            </div>
            </div>
            <div class="row"></div>
            <div class="col align-self-center"> 
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Diplomes  </th>
                        <th scope="col">Chemin d'accès</th>
                        <th scope="col">Nom du fichier</th>
                        <th scope="col">Extension </th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach($diplome as $diplome=>$vamusDiplome){ ?>
                    <tr>
                        <td><?= $vamusDiplome['NameDiploma'] ?></td>
                        <td><?= $vamusDiplome['Connections'] ?></td>
                        <td><?= $vamusDiplome['PathDiploma'] ?></td>
                        <td><?= $vamusDiplome['Extension'] ?></td>
                        <!-- <td><a href="?p=updateDiplom&id=<?= $vamusDiplome['id'] ?>">modifier</a></td>
                        <td><a href="?p=deleteDiplome&id=<?= $vamusDiplome['id'] ?>">supprimer</a></td> -->
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="?p=addDiplome">Ajouter un diplome</a></td>
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