<?php
include "../util/SQLUltil.php";

class user{
    private $makh;
    private $hoten;
    private $sdt;
    private $cccd;
    private $email;
    private $diachi;
    private $tendn;
    private $matkhau;

    public function __construct($makh,$hoten,$sdt,$cccd,$email,$diachi,$tendn,$matkhau)
    {
        $this->makh = $makh;
        $this->hoten=$hoten;
        $this->sdt=$sdt;
        $this->cccd=$cccd;
        $this->email=$email;
        $this->diachi=$diachi;
        $this->tendn=$tendn;
        $this->matkhau=$matkhau;
    }
    public function __destruct()
    {
        $this->makh = '';
        $this->hoten="";
        $this->sdt="";
        $this->cccd="";
        $this->email="";
        $this->diachi="";
        $this->tendn="";
        $this->matkhau="";
    }
    public function showinfo(){
        echo  "first name:".$this->hoten.""."<br>last name:".$this->tendn.""."<br>email:".$this->email.""."<br>pass:".$this->diachi;

    }
    public function deleteUser( $makh ) {
        $mysql = new SqlUtils();
        $data = [
            'id' => $makh
        ];
        $sql = 'DELETE FROM khachhang WHERE Makh = :id';
        $mysql->deleteData( $sql, $data );
    }
    public function getUserInfo(){
        $tendn = $_SESSION['tendn'];
        $mysql=new SqlUtils();
        $sql ="select *from khachhang  where tendn like :tendn";
        $data =['tendn'=>$tendn];   
        return $mysql->getdata($sql,$data);
    }

    public function insertUser(){
        $mysql=new SqlUtils();
            $data = [
                'hoten' => $this->hoten,
                'sdt'=>$this->sdt,
                'cccd'=>$this->cccd,
                'email'=>$this->email,
                'diachi'=>$this->diachi,
                'tendn'=>$this->tendn,
                'matkhau'=>$this->matkhau,
            ];
            $sql = "INSERT INTO khachhang (hoten,sdt,cccd,email,diachi,tendn,matkhau) VALUES (:hoten,:sdt,:cccd,:email,:diachi,:tendn,:matkhau)";
            $mysql->insertdata($sql,$data);
    }
    public function updateUser($makh){
        $mysql=new SqlUtils();
        $query="UPDATE khachhang SET HoTen='$this->hoten',DiaChi='$this->diachi', SDT=$this->sdt, email='$this->email', cccd=$this->cccd WHERE MaKH=$makh";
        $data=$mysql->updatedata($query);
        $mysql->disconnected();
        return $data;
    }
        //UPDATE khachhang SET hoten = :hoten, diachi= :diachi, sdt =:sdt, email:=email, cccd= :cccd 
    public function getAllUser(){
        $data=NULL;
        $mysql=new SqlUtils();
        $query="select* from khachhang";
        $data=$mysql->getAllP($query);
        // var_dump($data);
        $mysql->disconnected();
        return $data;
        }
    public function getByID(){
            if(isset($_GET["id"])){
                $ID=$_GET["id"];
                $data=NULL;
                $mysql=new SqlUtils();
                $query="select* from khachhang where MaKH =$ID";
                $data=$mysql->getAllP($query);
                $mysql->disconnected();
                return $data;
            }
        }
    public function getHoten()
    {
        return $this->hoten;
    }

   
    public function setHoten($hoten): self
    {
        $this->hoten = $hoten;

        return $this;
    }
    // public function kiemtraCCCD($cccd){
    //     $sql="select * from khachhang where cccd=$cccd";
    //     $mysql=new SqlUtils();
    //     $pdo=$mysql->connected();
    //     $data = $pdo->exec($sql);
    //     if($data!=false){
    //         return false;
    //     }
    //     $mysql->disconnected();
    //     return true;
    // }

    
    public function getTendn()
    {
        return $this->tendn;
    }

   
    public function setTendn($tendn): self
    {
        $this->tendn = $tendn;

        return $this;
    }

    
    public function getMatkhau()
    {
        return $this->matkhau;
    }

    
    public function setMatkhau($matkhau): self
    {
        $this->matkhau = $matkhau;

        return $this;
    }

    
    public function getSdt()
    {
        return $this->sdt;
    }

   
    public function setSdt($sdt): self
    {
        $this->sdt = $sdt;

        return $this;
    }

   
    public function getDiachil()
    {
        return $this->diachil;
    }

    
    public function setDiachil($diachil): self
    {
        $this->diachil = $diachil;

        return $this;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    
    public function getCccd()
    {
        return $this->cccd;
    }

   
    public function setCccd($cccd): self
    {
        $this->cccd = $cccd;

        return $this;
    }

    /**
     * Get the value of id
     */
    

    /**
     * Get the value of makh
     */
    public function getMakh()
    {
        return $this->makh;
    }

    /**
     * Set the value of makh
     */
    public function setMakh($makh): self
    {
        $this->makh = $makh;

        return $this;
    }
}