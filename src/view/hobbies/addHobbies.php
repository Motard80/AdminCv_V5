<?php

use src\class\otherClass\Form;

include_once '../src/controleur/hobbies/addHobbiesCtrl.php';
$form = new Form($_POST);
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
                <h1>Ajouter un loisir</h1>
            </div>
        </div>
        <div class="row"></div>
        <div class="col align-self-center">
            <?= isset($error) ? $error : '' ?>
            <form action="" method="post">
                <?= $form->inputText('addHobbiesName', 'addHobbiesName', 'addHobbiesName', 'Nouveau loisir')  ?><br>
                <?= $form->inputText('HobbiesDescription', 'HobbiesDescription', 'HobbiesDescription', 'Description') ?><br>
                <?= $form->inputText('Since', 'Since', 'Since', 'Année de début') ?><br>
                <?= $form->submit('Ajouter', 'addHobbies', 'addHobbies') ?>
            </form>
        </div>

    </div>
    </div>
<?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
?>