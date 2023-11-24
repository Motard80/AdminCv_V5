<?php
include_once '../src/controleur/hobbies/hobbiesCtrl.php';
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
                <h1>Loisirs </h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Loisirs </th>
                        <th scope="col">Description</th>
                        <th scope="col">Année de début</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach($hobbies as $listHobbies=>$valusHobbies){ ?>
                    <tr>
                        <td><?= $valusHobbies['HobbiesName'] ?></td>
                        <td><?= $valusHobbies['HobbiesDescription'] ?></td>
                        <td><?= $valusHobbies['Since'] ?></td>
                        <td><a href="?p=updateHobbie&id=<?= $valusHobbies['id'] ?>">modifier</a></td>
                        <td><a href="?p=deleteHobbie&id=<?= $valusHobbies['id'] ?>">supprimer</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                        <a href="?p=addHobbies">Ajouter un loisir</a>
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