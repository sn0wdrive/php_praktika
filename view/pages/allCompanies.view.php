<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark">
        <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1 class="mt-5 display-4 text-light">Visos įmonės</h1>
            <table class="table mt-5 text-light">
                <thead>
                    <tr>
                        <th scope="col text-light">Pavadinimas</th>
                        <th scope="col text-light">Adresas</th>
                        <th scope="col text-light">El. paštas</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($companies->allCompanies($page) as $company): ?>
                    <tr>
                        <th scope="row"><a href="/imone/<?=$company['id']?>"><?=$company['pavadinimas']?></a></th>
                        <td><?=$company['adresas']?></td>
                        <td><?=$company['elpastas']?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            
            <nav aria-label="Page navigation example" class="mt-2">
                <ul class="pagination">
                    <?php if($page != 1): ?>
                    <li class="page-item"><a class="page-link me-2" href="/all/<?=$page-1?>">Atgal</a></li>
                    <?php endif ?>
                    <li class="page-item"><a class="page-link" href="/all/<?=$page+1?>">Toliau</a></li>
                </ul>
            </nav>
        </div>
    </body>
</html>