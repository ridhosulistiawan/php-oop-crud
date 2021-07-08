<?php

class database{

    var $host = "localhost";
    var $user = "root";
    var $passwd = "";
    var $database = "oop-php";

    function __construct(){
        $this->connect = new mysqli($this->host, $this->user, $this->passwd, $this->database);

        if($this->connect->connect_error){
            die("connection fail : ". $this->connect->connect_error);
        }
    }

    function tampil(){
        $sql = "SELECT * FROM user";
        $result = $this->connect->query($sql);

        if(mysqli_num_rows($result) !== 0){
            while($data = $result->fetch_assoc()){
                $hasil[] = $data;
            }
            return $hasil;
        }
        $this->connect->close();
    }

    function tambah($nama, $alamat, $usia){
        $sql = "INSERT INTO user (nama, alamat, usia) VALUES('$nama', '$alamat', '$usia')";
        mysqli_query($this->connect, $sql);

        $this->connect->close();
    }

    function hapus($id){
        $sql = "DELETE FROM user WHERE id=$id";
        mysqli_query($this->connect, $sql);

        $this->connect->close();
    }

    function edit($id){
        $sql = "SELECT * FROM user WHERE id=$id";
        $data = mysqli_query($this->connect, $sql);

        while($d = $data->fetch_assoc()){
            $hasil[] = $d;
        }
        return $hasil;

        $this->connect->close();
    }

    function update($id, $nama, $alamat, $usia){
        $sql = "UPDATE user SET nama='$nama', alamat='$alamat', usia='$usia' WHERE id=$id";
        mysqli_query($this->connect, $sql);

        $this->connect->close();
    }
}

?>