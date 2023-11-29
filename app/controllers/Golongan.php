<?php

namespace App\Controllers;

use App\Core\Controller;

class Golongan extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Golongan();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('golongan/index', $data);
     }

     public function input()
     {
          $this->dashboard('golongan/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/golongan');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('golongan/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/golongan');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/golongan');
     }
}
