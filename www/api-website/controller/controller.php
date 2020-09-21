<?php
class Controller_formulaire
{
    private $bdd;

    private function set_database()
    {
        $bdd = new PDO("mysql:host=localhost;dbname=modele", "root", "");
        $this->bdd = $bdd;
    }

    private function checkEmail($email)
    {
        if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email))
        {
            echo "Email address is invalid";
        }
        else
        {
            return (1);
        }
    }

    public function checkFormDatas($name, $email)
    {
        $this->set_database();
        $bdd = $this->bdd;
        $query = $bdd->prepare("SELECT email, name FROM visiteurs");
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result && $this->checkEmail() == 1)
        {
            foreach($result as $value)
            {
                if ($email == $value)
                {
                    echo $email . " n'est pas disponible\n";
                    return (0);
                }
                if ($name == $value)
                {
                    echo $name . " n'est pas disponible\n";
                    return (0);
                }
            }
        }
        echo "checked\n";
        return (1);
    }
}





class Controller_product
{
    private $bdd;

    private function set_database()
    {
        $bdd = new PDO("mysql:host=localhost;dbname=modele", "root", "");
        $this->bdd = $bdd;
    }

    public function checkProductName($productName)
    {
        if (strlen($productName) >= 4)
        {
            return (1);
        }
        else
        {
            echo "product name is too short";
            return (0);
        }
    }

    public function checkPrice($price)
    {
        if (preg_match("/[0-9]+.[0-9]{2}€/", $price))
        {
            return (1);
        }
        else
        {
            return (0);
            echo "product price is invalid";
        }
    }

    public function checkDescription($description)
    {
        if (strlen($description) > 1000)
        {
            echo "product description is too long";
            return (0);
        }
        else
        {
            return (1);
        }
    }
}