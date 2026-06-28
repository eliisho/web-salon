<?php

namespace App\Controllers;

use App\Models\Type;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TypeController extends BaseController
{
    public function index()
    {
        $page = 'Type Of Service';
        $noUrut = 1;
        $typeModel = new Type();
        $dataTypes = $typeModel->findAll();

        return view ('type/index',['page' => $page, 'data' => $dataTypes, 'noUrut' => $noUrut]);
    }

    public function addType()
    {
        $page = 'Add Type';
        return view('type/addType', ['page' => $page]);
    }

    public function prosesAddType()
    {
        $typeModel = new Type();

        $data = [
            'name' => $this->request->getVar('namaTipe'),
            'flag_active' => $this->request->getVar('status'),
        ];

        if ($typeModel->insert($data)) {
            session()->setFlashdata('alert', [
                'icon' => 'success',
                'title' => 'Berhasil',
                'text' => 'Data berhasil ditambahkan!',
            ]);
        } else {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Terjadi kesalahan saat menambahkan data.',
            ]);
        }

        return redirect()->to('/type');
    }

    public function deleteType($id){
        $typeModel = new Type();

        if ($typeModel->delete($id)) {
            session()->setFlashdata('alert', [
                'icon' => 'success',
                'title' => 'Berhasil',
                'text' => 'Data berhasil dihapus!',
            ]);
        } else {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Terjadi kesalahan saat menghapus data.',
            ]);
        }
        return redirect()->to('/type');
    }

    public function  editType($id)
    {
        $page = 'Edit Type';
        $typeModel = new Type();
        $dataTypes = $typeModel->where('id',$id)->first();
        return view('type/editType', ['page' => $page, 'data' => $dataTypes]);
    }

    public function prosesEditType($id)
    {

        $typeModel = new Type();
    
        $data = [
            'name' => $this->request->getVar('name'), // input/select dengan name 'name'
            'flag_active' => $this->request->getVar('flag_active'), // input/select dengan name 'flag_active'
        ];
       
        if ($typeModel->update($id, $data)) {
            session()->setFlashdata('alert', [
                'icon' => 'success',
                'title' => 'Berhasil',
                'text' => 'Data berhasil diubah!',
            ]);
        } else {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Terjadi kesalahan saat mengubah data.',
            ]);
        }
    
        return redirect()->to('/type');
    }

    public function massDelete()
    {
        // Check if request is POST
        if (!$this->request->is('post')) {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Metode request tidak valid.',
            ]);
            return redirect()->back();
        }

        // Get selected items
        $selectedItems = $this->request->getPost('selected_items');

        if (!$selectedItems || !is_array($selectedItems)) {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Tidak ada item yang dipilih.',
            ]);
            return redirect()->back();
        }

        $model = new Type();
        
        if ($model->delete($selectedItems)) {
            session()->setFlashdata('alert', [
                'icon' => 'success',
                'title' => 'Berhasil',
                'text' => 'Data berhasil dihapus!',
            ]);
        } else {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Terjadi kesalahan saat menghapus data.',
            ]);
        }
        
        return redirect()->back();
    }

}