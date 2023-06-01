<?php

function checkInputs($inputs, $targetValue) {
    foreach ($inputs as $input) {
        if ($input === $targetValue) {
            return true;
        }
    }
    return false;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];
    $input4 = $_POST['input4'];
    $input5 = $_POST['input5'];
    $input6 = $_POST['input6'];

    $inputs = array($input1, $input2, $input3, $input4, $input5, $input6);

    // Valeur à rechercher
    $targetValue = 'Gregor_Mende'; // a remodif
    $targetValue2 = 'Jean-Pierre_Schumacher';
    $targetValue3 = 'Thich_Nhat_Hanh';
    $targetValue4 = 'FRANÇOIS';
    $targetValue5 = 'martin_luther';
    $targetValue6 = 'colomban-de-luxeuil';


    // Vérifie si l'une des chaînes saisies contient la valeur recherchée
    $isValueFoundM1 = checkInputs($inputs, $targetValue);
    $isValueFoundM2 = checkInputs($inputs, $targetValue2);
    $isValueFoundM3 = checkInputs($inputs, $targetValue3);
    $isValueFoundM4 = checkInputs($inputs, $targetValue4);
    $isValueFoundM5 = checkInputs($inputs, $targetValue5);
    $isValueFoundM6 = checkInputs($inputs, $targetValue6);

    if ($isValueFoundM1 && $isValueFoundM2 && $isValueFoundM3 && $isValueFoundM4 && $isValueFoundM5 && $isValueFoundM6) {
        header("Location: 192731d71523fc409da4f442f4b24666.html");
        exit();
    }













}
?>
