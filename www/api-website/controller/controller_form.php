<?php

include "controller.php";
include "../modele/modele.php";


if (isset($_POST["name"]) && isset($_POST["email"]))
{
    $controller_form = new Controller_formulaire();
    $modele_bdd = new Modele_bdd();
    if ($controller_form->checkFormDatas(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["email"])) == 1)
    {
        $modele_bdd->pushDatas(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["email"]));
        header("Location: ../index.php");
    }
    else
    {
        echo "Veuillez réessayer avec des données différentes\n";
    }
}