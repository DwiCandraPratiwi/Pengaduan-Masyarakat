<?php  
class Register_model{

    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data){
        $nama = htmlspecialchars($data['nama']);
        $username = htmlspecialchars($data['username']);
        $password = $data['password'];
        $level = 'user';
        $alamat = $data['alamat'];

        $query = "INSERT INTO tb_user(username,password,level,alamat) VALUES ('$username','$password','$level', '$alamat')";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
}