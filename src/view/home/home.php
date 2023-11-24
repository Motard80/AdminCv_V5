<?php
include_once '../src/controleur/home/homeCtrl.php';
if(isset($_SESSION['Valid']) && $_SESSION['Valid']==='OK' && $_SESSION['Auth']=== 'All'&& $_SESSION['G1']=== $Ay){

?>
<title><?= isset($title) ? $title : '' ?></title>
</head>

<body>
    <header>
        <?php include_once '../src/include/Navbar.php'; ?>
    </header>
    <div class="contener text-center">
        <div class="row justify-content-start">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <p>Page d'acceuil Admin</p>
            </div>
        </div>
    </div>
    <?php
        }else{
            include_once '../src/view/error/restrictedZone.php';
    }
    ?>