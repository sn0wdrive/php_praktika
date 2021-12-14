<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1 class="text-light mt-5 mb-5 display-4">Įmonės redagavimas</h1>
            <form method="post" class="d-flex flex-column w-100 align-items-center">
                <input type="text" name="name" value="<?=$company['pavadinimas']?>" placeholder="Įmonės Pavadinimas" class="w-50">
                <input type="text" name="code" value="<?=$company['kodas']?>" placeholder="Įmonės Kodas" class="w-50">
                <input type="text" name="pvm_code" value="<?=$company['pvm_kodas']?>" placeholder="Įmonės PVM Kodas" class="w-50">
                <input type="text" name="address" value="<?=$company['adresas']?>" placeholder="Įmonės Adresas" class="w-50">
                <input type="tel" name="phone" value="<?=$company['telefonas']?>" placeholder="Įmonės Tel. Nr." class="w-50">
                <input type="email" name="email" value="<?=$company['elpastas']?>" placeholder="Įmonės El. paštas" class="w-50">
                <input type="text" name="activity" value="<?=$company['veikla']?>" placeholder="Įmonės Veikla" class="w-50">
                <input type="text" name="owner" value="<?=$company['vadovas']?>" placeholder="Įmonės Vadovas" class="w-50">
                <button type="submit" name="send" class="mt-3">Redaguoti</button>
            </form>
        </div>
    </body>
</html>