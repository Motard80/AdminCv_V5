<?php

use src\class\otherClass\Form;

include_once '../src/controleur/subDomain/addSubDomainCtrl.php';
$form = new Form($_POST);
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
                <h1>Ajouté une sous catégorie</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
           <p><?= isset($error) ? $error : ''?></p>
        <form action="" method="post">
            <div>
                <?= $form->inputText('SubDomaineName','SubDomaineName','SubDomaineName','Nouvelle sous catégorie') ?><br>   
                <?= $form->error('SubDomaineName') ?>
            </div>
            <select name="domainId" id="domainId">
                <?php foreach ($ListDomaine as $DomainList=>$valuesDomain) { ?>
                <option value="<?= $valuesDomain['id'] ?>"><?= $valuesDomain['DomainName'] ?></option>
                <?php } ?>
            </select>
            <?= $form->submit('Ajouter','addSubDomain','addSubDomain') ?>       
        </form>
        </div>

    </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>