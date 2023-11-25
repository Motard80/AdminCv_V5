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
            $idDomain = $_GET['id'];
            $domain = new DomainModel;
            $domainById = $domain->findById($idDomain);
            if ($domainById != false) {
                if (isset($_POST['updateDomain'])) {
                    $updateDomain = new DomainModel;
                    if (!empty($_POST['nameDomain'])) {
                        $newName = htmlspecialchars($_POST['nameDomain']);
                        $updateDomain->setDomainName($newName);
                    }
                    $checkDomain = $updateDomain->update($updateDomain);
                    if ($checkDomain === true) {
                        $newLocation = "?p=domain";
                        header("Location: $newLocation", true, 301);
                        exit();
                    } else {
                        $newLocation = "?p=error";
                        header("Location: $newLocation", true, 301);
                        exit();
                    }
                }
            } else {
                $newLocation = "?p=error";
                header("Location: $newLocation", true, 301);
                exit();
            }
        }
    }
