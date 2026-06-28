<?php

namespace App\Controllers;

use App\Models\Employee;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmployeeController extends BaseController
{
    public function index()
    {
        $page = 'Employees';
            $noUrut = 1;
    
            $model = new Employee();
            $data = $model->paginate(10);
    
            return view('employee/index',['page' => $page, 'data' => $data, 'noUrut' => $noUrut,'pager' => $model->pager]);
    }

    public function addEmployee()
    {
        $page = 'Add Employee';
        return view('employee/addEmployee', ['page' => $page]);
    }

    public function prosesAddEmployee()
    {
        $employeeModel = new Employee();

        $data = [
            'name' => $this->request->getVar('namaEmployee'),
            'gender' => $this->request->getVar('gender'),
            'date_of_birth' => $this->request->getVar('birthDate'),
            'phone_number' => $this->request->getVar('phoneNumber'),
            'email' => $this->request->getVar('email'),
            'hire_date' => $this->request->getVar('hireDate'),
        ];

        if ($employeeModel->insert($data)) {
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

        return redirect()->to('/employee');
    }

    public function deleteEmployee($id){
        $employeeModel = new Employee();

        if ($employeeModel->delete($id)) {
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
        return redirect()->to('/employee');
    }

    public function  editEmployee($id)
    {
        $page = 'Edit Employee';
        $employeeModel = new Employee();
        $dataEmployees = $employeeModel->where('id',$id)->first();
        return view('employee/editEmployee', ['page' => $page, 'data' => $dataEmployees]);
    }

    public function prosesEditEmployee($id)
    {

        $employeeModel = new Employee();
    
        $data = [
            'name' => $this->request->getVar('namaEmployee'),
            'gender' => $this->request->getVar('gender'),
            'date_of_birth' => $this->request->getVar('birthDate'),
            'phone_number' => $this->request->getVar('phoneNumber'),
            'email' => $this->request->getVar('email'),
            'hire_date' => $this->request->getVar('hireDate'),
        ];
       
        if ($employeeModel->update($id, $data)) {
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
    
        return redirect()->to('/employee');
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
                'text' => 'Tidak ada karyawan yang dipilih.',
            ]);
            return redirect()->back();
        }

        $model = new Employee();
        
        if ($model->delete($selectedItems)) {
            session()->setFlashdata('alert', [
                'icon' => 'success',
                'title' => 'Berhasil',
                'text' => 'Karyawan berhasil dihapus!',
            ]);
        } else {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Terjadi kesalahan saat menghapus karyawan.',
            ]);
        }
        
        return redirect()->back();
    }

}