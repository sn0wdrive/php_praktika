<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100 mt-5">
            <h1 class="display-4 text-light">Įmonės paieška</h1>
            <form method="post" class="mt-5">
                <input type="text" name="search" placeholder="Įmonės paieška">
                <button type="submit" name="send">Ieškoti</button>
            </form>
        </div>
    </body>
</html>