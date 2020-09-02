<?php


include "../modele/modele.php";






#check if admin is connected
if (isset($_POST["username"]) && isset($_POST["password"]))
{
    if ($_POST["username"] == "weslo" && $_POST["password"] == "068992530")
    {
        session_start();
        $_SESSION["weslo"] = true;
    }
    else
    {
        header("Location: admin_connection.html");
    }
}
else
{
    header("Location: admin_connection.html");
}





$modele_server = new Modele_server();

$ip_client = $modele_server->getUserIpAddr();
$page_client = $modele_server->getUserPage();
$port_client = $modele_server->getUserPort();
$address_server = $modele_server->getServerAddress();
$name_server = $modele_server->getServerName();



?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Admin Page</title>

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <div class="container-fluid">
        <div class="container">
            <p><?php echo $ip_client . "\n" ?></p>
            <p><?php echo $page_client . "\n" ?></p>
            <p><?php echo $port_client . "\n" ?></p>
            <p><?php echo $address_server . "\n" ?></p>
            <p><?php echo $name_server . "\n" ?></p>
            
            <a href="../index.php" class="btn btn-outline-primary">deconnection</a>
        </div>
        <div class="container">
            <form action="../controller/controller_admin.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="product_name" placeholder="Product name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName" name="price" placeholder="15.99€">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2 mr-sm-2">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <label for="exampleFormControlFile1">Product Image</label>
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>