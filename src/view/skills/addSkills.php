<?php

use src\class\otherClass\Form;

//include_once '../src/controleur/skills/addSkillsCtrl.php';
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
                <h1>Ajouté une compétence professionnelle</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
           <p><?= isset($error) ? $error : ''?></p>
        <form action="" method="post">
            <?= $form->inputText('Description','Description','Description','Nouvelle compétence professionnel') ?><br>   
            <select name="Subdomain" id="Subdomain">
                <?php foreach ($subDomain as $subDomainList=>$valuesSkills) { ?>
                <option value="<?= $valuesSkills['id'] ?>"><?= $valuesSkills['SubDomaineName'] ?></option>
                <?php } ?>
            </select>
            <?= $form->submit('Ajouter','addSkills','addSkills') ?>       
        </form>
        </div>

    </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>