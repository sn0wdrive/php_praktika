<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1 class="text-light display-4 mt-5 mb-5">Naujos įmonės pridėjimas</h1>
            <form method="post" class="d-flex flex-column w-100 align-items-center">
                <input type="text" name="name" placeholder="Įmonės Pavadinimas" class="w-50 mt-1">
                <input type="text" name="code" placeholder="Įmonės Kodas" class="w-50 mt-1">
                <input type="text" name="pvm_code" placeholder="Įmonės PVM Kodas" class="w-50 mt-1">
                <input type="text" name="address" placeholder="Įmonės Adresas" class="w-50 mt-1">
                <input type="tel" name="phone" placeholder="Įmonės Tel. Nr." class="w-50 mt-1">
                <input type="email" name="email" placeholder="Įmonės El. paštas" class="w-50 mt-1">
                <input type="text" name="activity" placeholder="Įmonės Veikla" class="w-50 mt-1">
                <input type="text" name="owner" placeholder="Įmonės Vadovas" class="w-50 mt-1">
                <button type="submit" name="send" class="mt-1">Pridėti</button>
            </form>
        </div>
    </body>
</html>