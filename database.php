<?php

class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "12345678";
    var $db = "malasngoding";
    var $con;

    function __construct(){
        $this -> con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con,$this->db);
    }
    function tampil_data(){
        $data = mysqli_query($this->con, "SELECT * FROM user ");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }   
        return $hasil;
    }
    function input ($nama,$alamat,$usia){
        mysqli_query($this->con,"INSERT INTO user VALUES ('','$nama','$alamat','$usia')");
    }
    function hapus($id){
        mysqli_query($this->con, "DELETE FROM user WHERE id='$id'");
    }
    function edit($id){
        $data = mysqli_query($this->con, "SELECT * FROM user WHERE id= '$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$nama,$alamat,$usia){
        mysqli_query($this->con,"UPDATE user SET nama = '$nama',alamat = '$alamat',usia = '$usia' WHERE id ='$id'");
    }
}
?>

