<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{

   public function index()
   {
      $barang = new BarangModel();

      $data['barang'] = $barang->findAll();
      return view('barang/barang', $data);
   }

   public function create()
   {
      return view('barang/create');
   }

   public function store()
   {
      $request = service('request');
      $postData = $request->getPost();

      if (isset($postData)) {

         $input = $this->validate([
            'nama_barang' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required'
         ]);

         if (!$input) {
            return redirect()->to('barang/create')->withInput()->with('validation', $this->validator);
         } else {

            $barang = new BarangModel();

            $data = [
               'nama_barang' => $postData['nama_barang'],
               'harga_beli' => $postData['harga_beli'],
               'harga_jual' => $postData['harga_jual'],
               'stok' => $postData['stok']
            ];

            if ($barang->insert($data)) {
               session()->setFlashdata('message', 'Added Successfully!');
               session()->setFlashdata('alert-class', 'alert-success');

               return redirect()->to('barang');
            } else {
               session()->setFlashdata('message', 'Data not saved!');
               session()->setFlashdata('alert-class', 'alert-danger');

               return redirect()->to('barang/create')->withInput();
            }
         }
      }
   }

   public function edit($id_barang = 0)
   {

      $barang = new BarangModel();
      $barang = $barang->find($id_barang);

      $data['barang'] = $barang;
      return view('barang/edit', $data);
   }

   public function update($id_barang = 0)
   {
      $request = service('request');
      $postData = $request->getPost();
      // var_dump($postData);

      if (isset($postData)) {
         $input = $this->validate([
            'nama_barang' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required'
         ]);

         if (!$input) {
            return redirect()->to('barang/edit/' . $id_barang)->withInput()->with('validation', $this->validator);
         } else {

            $barang = new BarangModel();

            $data = [
               'nama_barang' => $postData['nama_barang'],
               'harga_beli' => $postData['harga_beli'],
               'harga_jual' => $postData['harga_jual'],
               'stok' => $postData['stok']
            ];

            if ($barang->update($id_barang, $data)) {
               session()->setFlashdata('message', 'Updated Successfully!');
               session()->setFlashdata('alert-class', 'alert-success');

               return redirect()->to('barang');
            } else {
               session()->setFlashdata('message', 'Data not saved!');
               session()->setFlashdata('alert-class', 'alert-danger');

               return redirect()->to('barang/edit/'.$id_barang)->withInput();
            }
         }
      }
   }

   public function delete($id_barang = 0)
   {

      $barang = new BarangModel();

      if ($barang->find($id_barang)) {

         $barang->delete($id_barang);

         session()->setFlashdata('message', 'Deleted Successfully!');
         session()->setFlashdata('alert-class', 'alert-success');
      } else {
         session()->setFlashdata('message', 'Record not found!');
         session()->setFlashdata('alert-class', 'alert-danger');
      }

      return redirect()->to('barang');
   }
}
