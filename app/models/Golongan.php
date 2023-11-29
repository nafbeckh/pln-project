<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{
     public function show()
     {
          $query = "SELECT * FROM golongans";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $kode = $_POST['kode'];
          $nama = $_POST['nama'];

          $sql = "INSERT INTO golongans (kode, nama) VALUES (:kode, :nama)";
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":kode", $kode);
          $stmt->bindParam(":nama", $nama);
          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM golongans WHERE id=:id";
          $stmt = $this->db->prepare($query);
          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $kode = $_POST['kode'];
          $nama = $_POST['nama'];
          $updated_at = date('Y-m-d H:i:s');
          $id = $_POST['id'];

          $sql = "UPDATE golongans SET kode = :kode, nama = :nama, updated_at = :updated_at WHERE id=:id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":kode", $kode);
          $stmt->bindParam(":updated_at", $updated_at);
          $stmt->bindParam(":id", $id);
          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM golongans WHERE id=:id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":id", $id);
          $stmt->execute();
     }
}
