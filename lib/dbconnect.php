<?php
class Database{
    //Khai báo thuộc tính
    private $conn = null;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $data = 'tinonline';
    private $result = null;

    //Xay dung cac phuong thuc
    private function connect(){
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->data)
        or die('Ket noi khong thanh cong');
        $this->conn->query('set names UTF8');
    }

    //Phuong thuc select du lieu:
    public function Select($sql){
        $this->connect();
        $this->result = $this->conn->query($sql);
    }

    public function Fetch(){
        if($this->result->num_rows>0){
            $rows = $this->result->fetch_assoc();
        }else{
            $rows = 0;
        }
        return $rows;
    }

    //Phuong thuc chung cho insert, update, delete
    public function Command($sql){
        $this->connect();
        $this->conn->query($sql);
    }

}














?>