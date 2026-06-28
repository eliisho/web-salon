<?php

namespace App\Controllers;

use App\Models\Type;
use Config\Services;
use App\Models\Service;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ServiceController extends BaseController
{
    public function index()
    {
        $page = 'Services';
        $model = new Service();
        
        // Ambil nomor halaman saat ini, default ke 1 jika tidak ada
        $pageNumber = $this->request->getVar('page') ?: 1;
        $noUrut = ($pageNumber - 1) * 20 + 1; // Hitung nomor urut berdasarkan halaman

        // Query data dengan pagination
        $data = $model->select('services.*, types.name as type_name')
                    ->join('types', 'types.id = services.type_id', 'left')
                    ->paginate(10); // 20 items per page

        // Return view dengan data dan pagination
        return view('services/index', [
            'page' => $page,
            'data' => $data,
            'noUrut' => $noUrut,
            'pager' => $model->pager, // Kirim instance pager ke view
        ]);
    }

    public function hairStyling()
    {
        return view('services/hair-styling');
    }
    public function hairColoring()
    {
        return view('services/hair-coloring');
    }
    public function spa()
    {
        return view('services/spa');
    }
    public function facial()
    {
        return view('services/facial');
    }

    public function manipedi()
    {
        return view('services/manipedi');
    }
    public function makeup()
    {
        return view('services/makeup');
    }
    public function nailart()
    {
        return view('services/nailart');
    }
    public function waxing()
    {
        return view('services/waxing');
    }

    public function addService()
    {   
        $dataType = new Type();
        $dataTypes = $dataType->findAll();

        $page = 'Add Service';
        return view('services/addService', ['page' => $page,'data'=>$dataTypes]);
    }

    public function prosesAddService()
    {
        $model = new Service();

        $data = [
            'name' => $this->request->getVar('name'),
            'duration' => $this->request->getVar('duration'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'type_id' => $this->request->getVar('type_id'),
            'flag_active' => $this->request->getVar('status'),
        ];

        if ($model->insert($data)) {
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

        return redirect()->to('/service');
    }

    public function deleteService($id){
        $model = new Service();

        if ($model->delete($id)) {
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
        return redirect()->to('/service');
    }

    public function  editService($id)
    {
        $page = 'Edit Service';
        $model = new Service();
        // $dataServices = $model->where('id',$id)->first();
        $dataType = new Type();
        $dataTypes = $dataType->findAll();
        $dataServices = $model->select('services.*, types.name as type_name, types.id as type_id')
                            ->join('types', 'types.id = services.type_id', 'left')
                            ->where('services.id', $id)
                            ->first();

        return view('services/editService', ['page' => $page, 'data' => $dataServices, 'dataTypes' => $dataTypes]);
    }

    public function prosesEditService($id)
    {

        $model = new Service();
    
        $data = [
            'name' => $this->request->getVar('name'),
            'duration' => $this->request->getVar('duration'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'type_id' => $this->request->getVar('type_id'),
            'flag_active' => $this->request->getVar('status'),
        ];
        
        if ($model->update($id, $data)) {
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
    
        return redirect()->to('/service');
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

        $model = new Service();
        
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
