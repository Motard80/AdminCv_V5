 <?php

    use src\class\model\AccesModel;
    use src\class\model\DomainModel;

    $title = 'Modier un domaine';

    $Ay = 25512;
    $idAccess = new AccesModel;
    $idAccess->showAll();
    if ($idAccess == $_SESSION) {
        $Auth = 'All';
    }
    if (isset($_GET['id'])) {
        if (is_int(intval($_GET['id']))) {
            $domain = new DomainModel();
            $VerifDomain = $domain->findById($_GET['id']);
            $title=$domain->getDomainName();
            if ($VerifDomain == false) {
                $newLocation = "?p=error";
                header("Location: $newLocation", true, 301);
                exit();
            }
        }
        if(isset($_POST['updateDomain'])){
            $updateDomain = new DomainModel();
            if(!empty($_POST['nameDomain'])){
                $nameDomain =htmlspecialchars($_POST['nameDomain']);
                $updateDomain->setDomainName($nameDomain);
            }else{
                $nameDomain= $updateDomain->getDomainName();
                $updateDomain->setDomainName($nameDomain);
            }
            $checkUpdateDomain = $updateDomain->update($_GET['id']);
            if($checkUpdateDomain=== true){
                $newLocation = "?p=domain";
                header("Location: $newLocation", true, 301);
                exit();
            }else{
                $newLocation = "?p=error";
                header("Location: $newLocation", true, 301);
                exit();
            }
        }
    }
