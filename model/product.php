<?php
include "../util/SQLUltil.php";

class product{
    private $id;
    private $name;
    private $price;
    private $number;

    public function __construct($id,$name,$price,$number){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->number=$number;
    }
    public function __destruct()
    {
        $this->id="";
        $this->name="";
        $this->price="";
        $this->number="";
    }
    public function getAllProduct(){
        $data=NULL;
        $mysql=new SqlUtils();
        $query="select* from product";
        $data=$mysql->getAllP($query);
        $mysql->disconnected();
        return $data;
     }
     public function getProductByID(){
        if(isset($_GET["id"])){
        $ID=$_GET["id"];
        $data=NULL;
        $mysql=new SqlUtils();
        $query="select* from product where id =$ID";
        $data=$mysql->getAllP($query);
        $mysql->disconnected();
        return $data;
        }}
    
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
?>