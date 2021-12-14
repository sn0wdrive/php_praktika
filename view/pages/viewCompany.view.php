<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1 class="text-light mt-5 display-4"><?=$company['pavadinimas']?></h1>
            <ul>
                <li class="text-light mt-1 list-unstyled">Kodas: <?=$company['kodas']?></li>
                <li class="text-light mt-1 list-unstyled">PVM Kodas: <?=$company['pvm_kodas']?></li>
                <li class="text-light mt-1 list-unstyled">Adresas: <?=$company['adresas']?></li>
                <li class="text-light mt-1 list-unstyled">Telefono nr.: <?=$company['telefonas']?></li>
                <li class="text-light mt-1 list-unstyled">El. paštas: <?=$company['elpastas']?></li>
                <li class="text-light mt-1 list-unstyled">Veikla: <?=$company['veikla']?></li>
                <li class="text-light mt-1 list-unstyled">Vadovas: <?=$company['vadovas']?></li>
            </ul>
            <a href="/edit-company/<?=$company['id']?>" class="btn btn-success">Redaguoti</a>
            <a href="/delete-company/<?=$company['id']?>" class="btn btn-danger">Ištrinti</a>
        </div>
    </body>
</html>