<?php

namespace App\Models;

use App\Core\Model;

class Login extends Model
{
     public function proses()
     {
          $email = $_POST['email'];
          $password = $_POST['password'];

          $sql = 'SELECT id, email, nama, password FROM users WHERE email = :email';
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(':email', $email);
          $stmt->execute();

          if (!$stmt->rowCount() > 0) {
               return ['status' => false];
          }

          $user = $stmt->fetch();

          $verifyPassword = password_verify($password, $user['password']);

          if (!$verifyPassword) {
               return ['status' => false];
          }

          return [
               'status' => true,
               'user' => [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'nama' => $user['nama'],
               ]
          ];
     }
}
