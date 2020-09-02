<?php


class Modele_server
{
    public function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function getUserPage(){
        $page = $_SERVER["PHP_SELF"];
        return $page;
    }

    public function getServerAddress(){
        $address = $_SERVER["SERVER_ADDR"];
        return $address;
    }

    public function getServerName(){
        $name = $_SERVER["SERVER_NAME"];
        return $name;
    }

    public function getUser(){
        $user = $_SERVER["REMOTE_USER"];
        return $user;
    }

    public function getUserPort(){
        $port = $_SERVER["REMOTE_PORT"];
        return $port;
    }
}





class Modele_bdd
{
    private $bdd;

    private function set_database()
    {
        $bdd = new PDO("mysql:host=localhost;dbname=modele", "root", "");
        $this->bdd = $bdd;
    }

    public function pushDatas($name, $email)
    {
        $this->set_database();
        $bdd = $this->bdd;
        $push = $bdd->prepare("INSERT INTO visiteurs (name, email) VALUES (:name, :email)");
        $push->execute([":name" => $name, ":email" => $email]);
        echo "pushed";
        return (1);
    }

    public function selectProducts()
    {
        $this->set_database();
        $bdd = $this->bdd;
        $push = $bdd->prepare("SELECT * FROM products");
        $push->execute();
    }
}





class Modele_product
{
    private $bdd;

    private function set_database()
    {
        $bdd = new PDO("mysql:host=localhost;dbname=modele;", "root", "");
        $this->bdd = $bdd;
    }

    public function pushProductDatas($product_name, $price, $description)
    {
        $this->set_database();
        $bdd = $this->bdd;

        $query = $bdd->prepare("INSERT INTO products (product_name, description, price) VALUES (:product_name, :description, :price");
        $query->execute([":product_name" => $product_name, ":description" => $description, ":price" => $price]);
    }

    public function pushImageName($imagename)
    {
        $this->set_database();
        $bdd = $this->bdd;

        $query = $bdd->prepare("INSERT INTO products (image_address) VALUES (:imagename)");
        $query->execute([":imagename" => $imagename]);
    }

    public function selectDatas()
    {
        $this->set_database();
        $bdd = $this->bdd;

        $query = $bdd->prepare("SELECT * FROM products");
        $query->execute();
        $result = $query->fetch();

        foreach($result as $value)
        {
            var_dump($value);
        }
    }
}