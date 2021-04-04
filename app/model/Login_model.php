<?php
class Login_model
{
    public function __construct()
    {
        $this->db = new Database;
    }
    public function login($data)
    {
        $username = htmlspecialchars($data['username']);
        $password = $data['password'];

        $query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
        $this->db->query($query);
        return $this->db->single();
    }
}
