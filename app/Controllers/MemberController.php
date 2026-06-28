<?php

namespace App\Controllers;

use App\Models\Member;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MemberController extends BaseController
{
    public function index()
    {
        $page = 'Members';
            $noUrut = 1;
    
            $model = new Member();
            $data = $model->paginate(10);
    
            return view('member/index',['page' => $page, 'data' => $data, 'noUrut' => $noUrut,'pager' => $model->pager]);
    }

    public function addMember()
    {
        $page = 'Add Member';
        return view('member/addMember', ['page' => $page]);
    }

    public function prosesAddMember()
    {
        $memberModel = new Member();

        $data = [
            'full_name' => $this->request->getVar('namaMember'),
            'phone_number' => $this->request->getVar('phoneNumber'),
            'join_date' => $this->request->getVar('joinDate'),
        ];

        if ($memberModel->insert($data)) {
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

        return redirect()->to('/member');
    }

    public function deleteMember($id){
        $memberModel = new Member();

        if ($memberModel->delete($id)) {
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
        return redirect()->to('/member');
    }

    public function  editMember($id)
    {
        $page = 'Edit Member';
        $memberModel = new Member();
        $dataMembers = $memberModel->where('id',$id)->first();
        return view('member/editMember', ['page' => $page, 'data' => $dataMembers]);
    }

    public function prosesEditMember($id)
    {

        $memberModel = new Member();
    
        $data = [
            
            'full_name' => $this->request->getVar('namaMember'),
            'phone_number' => $this->request->getVar('phoneNumber'),
            'join_date' => $this->request->getVar('joinDate'),
        ];
       
        if ($memberModel->update($id, $data)) {
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
    
        return redirect()->to('/member');
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
                'text' => 'Tidak ada member yang dipilih.',
            ]);
            return redirect()->back();
        }

        $model = new Member();
        
        if ($model->delete($selectedItems)) {
            session()->setFlashdata('alert', [
                'icon' => 'success',
                'title' => 'Berhasil',
                'text' => 'Member berhasil dihapus!',
            ]);
        } else {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Terjadi kesalahan saat menghapus member.',
            ]);
        }
        
        return redirect()->back();
    }
}
