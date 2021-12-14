<?php

use Imones\Database;
use Imones\Company;
use Imones\Validation;

if(isset($_POST['send'])) {
    $connection = Database::connect();
    $companies = new Company($connection);
    $validation = Validation::newCompany($_POST);
    if($validation != 'Klaidų nerasta.') {
        foreach ($validation as $klaida) {
            echo '<h1 style="text-align: center">🧨 ' . $klaida . ' 🧨</h1>';
        }
    } else {
        $companies->createCompany($_POST);
    }
} else {
    require 'view/pages/newCompany.view.php';
}
