<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{
     public function show()
     {
          $query = "SELECT *, p.id as id_pelanggan, g.nama as nama_golongan
                    FROM pelanggans p
                    LEFT JOIN golongans g ON p.id_gol = g.id
                    LEFT JOIN users u ON p.id_user = u.id
                    ORDER BY p.created_at";

          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $id_gol = $_POST['id_gol'];
          $no_pelanggan = $_POST['no_pelanggan'];
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $ktp = $_POST['ktp'];
          $seri = $_POST['seri'];
          $meteran = $_POST['meteran'];
          $id_user = $_POST['id_user'];

          $sql = "INSERT INTO pelanggans (id_gol, no_pelanggan, nama, alamat, ktp, seri, meteran, id_user)
                    VALUES (:id_gol, :no_pelanggan, :nama, :alamat, :ktp, :seri, :meteran, :id_user)";
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":id_gol", $id_gol);
          $stmt->bindParam(":no_pelanggan", $no_pelanggan);
          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":alamat", $alamat);
          $stmt->bindParam(":ktp", $ktp);
          $stmt->bindParam(":seri", $seri);
          $stmt->bindParam(":meteran", $meteran);
          $stmt->bindParam(":id_user", $id_user);
          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM pelanggans WHERE id = :id";
          $stmt = $this->db->prepare($query);
          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $id_gol = $_POST['id_gol'];
          $no_pelanggan = $_POST['no_pelanggan'];
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $ktp = $_POST['ktp'];
          $seri = $_POST['seri'];
          $meteran = $_POST['meteran'];
          $id_user = $_POST['id_user'];
          $status_aktif = $_POST['status_aktif'];
          $updated_at = date('Y-m-d H:i:s');
          $id = $_POST['id'];

          $sql = "UPDATE pelanggans SET id_gol = :id_gol, no_pelanggan = :no_pelanggan, nama = :nama,
                    alamat = :alamat, ktp = :ktp, seri = :seri, meteran = :meteran, id_user = :id_user,
                    status_aktif = :status_aktif, updated_at = :updated_at
                    WHERE id=:id";

          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":id_gol", $id_gol);
          $stmt->bindParam(":no_pelanggan", $no_pelanggan);
          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":alamat", $alamat);
          $stmt->bindParam(":ktp", $ktp);
          $stmt->bindParam(":seri", $seri);
          $stmt->bindParam(":meteran", $meteran);
          $stmt->bindParam(":id_user", $id_user);
          $stmt->bindParam(":status_aktif", $status_aktif);
          $stmt->bindParam(":updated_at", $updated_at);
          $stmt->bindParam(":id", $id);
          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM pelanggans WHERE id=:id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":id", $id);
          $stmt->execute();
     }
}
