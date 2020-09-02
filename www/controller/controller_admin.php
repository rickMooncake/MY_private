<?php

include "controller.php";
include "../modele/modele.php";


var_dump($_POST);
var_dump($_FILES);

if (isset($_FILES["image"]))
{
    // Push the image in the images directory
    $target_file_directory = "../images/";
    $target_file = $target_file_directory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    $filename = $_FILES["image"]["name"];
    
    if ($check !== false && !file_exists($target_file))
    {
        echo "file is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
    else
    {
        echo "file is not an image or already exists.";
        $uploadOk = 0;
    }
    
    if ($uploadOk == 1)
    {
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
        {
            $modele_product = new Modele_product();
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded";
            $modele_product->pushImageName($_FILES["image"]["name"]);
        }
        else
        {
            "Sorry, there was an error uploading your file.";
        }
    }
}






if (isset($_POST["product_name"]) && isset($_POST["price"]) && isset($_POST["description"]))
{
    $modele_product = new Modele_product();
    $controller_product = new Controller_product();

    if ($controller_product->checkProductName($_POST["product_name"]) && $controller_product->checkPrice($_POST["price"]) && $controller_product->checkDescription($_POST["description"]))
    {
        $modele_product->pushProductDatas($_POST["product_name"], $_POST["price"], $_POST["description"]);
        echo "produit créé";
    }
}