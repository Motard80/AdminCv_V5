<?php

use src\class\otherClass\Form;

include_once '../src/controleur/domain/addDomainCtrl.php';
$form = new Form($_POST);
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
                <h1>Ajouter un domaine de compétence</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <?= isset($error) ? $error : ''?>
            <form action="" method="post">
                <?=$form->inputText('newDomain','newDomain','newDomain','Nouveau domain de compétence' )  ?>
                <?= $form->submit('Ajouter','addDomain','addDomain') ?>
            </form>
        </div>

    </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>