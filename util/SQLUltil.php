<?php
class SqlUtils{
    private $servername;
    private $username;
    private $password;
    private $myDB;
    // private $disconnected;

    public function __construct()
    {
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->myDB="qlks";
    }
    public function connected(){
        try{
            $conn=new PDO("mysql:host=$this->servername;dbname=$this->myDB",$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $conn->query("set names 'utf8'");
            // echo"connect successfully!";
            return $conn;
        }catch(PDOException $e){
            echo"connection fail!".$e->getMessage();
        }
    }
    public function disconnected(){
        $this->conn=null;
    }
    public function insertdata($sql, $data=array()){
        $mysql=new SqlUtils();
        $pdo=$mysql->connected();
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
        $mysql->disconnected();
        
    }
    public function deletedata($sql, $data=array()){
        $mysql=new SqlUtils();
        $pdo=$mysql->connected();
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
        }

    public function updatedata($sql, $data=array()){
        $mysql=new SqlUtils();
        $pdo=$mysql->connected();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
    }
    public function getdata($sql,$data=array()){
        $mysql=new SqlUtils();
        $pdo=$mysql->connected();
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
        $user=$stmt->fetch();
        $mysql->disconnected();
        return $user;
        
    }

    // public function getUserInfo(){
    //     $tendn = $_SESSION['tendn'];
    //     $mysql=new SqlUtils();
    //     $sql ="select *from khachhang  where tendn like :tendn";
    //     $data =['tendn'=>$tendn];   
    //     return $mysql->getdata($sql,$data);
    // }

    public function getAllP($sql){
        $mysql=new SqlUtils();
        $pdo=$mysql->connected();
        $stmt= $pdo->query($sql);
        $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $mysql->disconnected();
        return $user;
    }
        
    
}