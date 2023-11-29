<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
      public function show()
      {
            $query = "SELECT * FROM users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $this->selects($stmt);
      }

      public function save()
      {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            $kode_pos = $_POST['kode_pos'];
            $role = 0;

            $sql = "INSERT INTO users (email, password, nama, alamat, no_hp, kode_pos, role)
                    VALUES (:email, :password, :nama, :alamat, :no_hp, :kode_pos, :role)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":no_hp", $no_hp);
            $stmt->bindParam(":kode_pos", $kode_pos);
            $stmt->bindParam(":role", $role);
            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM users WHERE id=:id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            $kode_pos = $_POST['kode_pos'];
            $role = $_POST['role'];
            $status_aktif = $_POST['status_aktif'];
            $updated_at = date('Y-m-d H:i:s');
            $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE users SET email = :email, password = :password, nama = :nama,
                              alamat = :alamat, no_hp = :no_hp, kode_pos = :kode_pos, role = :role,
                              status_aktif = :status_aktif, updated_at = :updated_at WHERE id=:id";
            } else {
                  $sql = "UPDATE users SET email = :email, nama = :nama,
                              alamat = :alamat, no_hp = :no_hp, kode_pos = :kode_pos, role = :role,
                              status_aktif = :status_aktif, updated_at = :updated_at WHERE id=:id";
            }

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":email", $email);
            if (!empty($password)) {
                  $stmt->bindParam(":password", $password);
            }
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":no_hp", $no_hp);
            $stmt->bindParam(":kode_pos", $kode_pos);
            $stmt->bindParam(":role", $role);
            $stmt->bindParam(":status_aktif", $status_aktif);
            $stmt->bindParam(":updated_at", $updated_at);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM users WHERE id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
