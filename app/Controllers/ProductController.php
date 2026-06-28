<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index()
    {
            $page = 'Products';
            $noUrut = 1;
    
            $model = new Product();
            $data = $model->paginate(10);
    
            return view('products/index',['page' => $page, 'data' => $data, 'noUrut' => $noUrut,'pager' => $model->pager]);
        
    }
    
    public function addProduct()
    {
        $page = 'Add Product';
        return view('products/addProduct', ['page' => $page]);
    }

    public function prosesAddProduct()
    {
        $productModel = new Product();

        $data = [
            'product_name' => $this->request->getVar('namaProduct'),
            'price' => $this->request->getVar('harga'),
            'description' => $this->request->getVar('desc'),
            'stock_quantity' => $this->request->getVar('qty'),
        ];

        if ($productModel->insert($data)) {
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

        return redirect()->to('/product');
    }

    public function deleteProduct($id){
        $productModel = new Product();

        if ($productModel->delete($id)) {
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
        return redirect()->to('/product');
    }

    public function  editProduct($id)
    {
        $page = 'Edit Product';
        $productModel = new Product();
        $dataProducts = $productModel->where('id',$id)->first();
        return view('products/editProduct', ['page' => $page, 'data' => $dataProducts]);
    }

    public function prosesEditProduct($id)
    {

        $productModel = new Product();
    
        $data = [
            'product_name' => $this->request->getVar('namaProduct'),
            'price' => $this->request->getVar('harga'),
            'description' => $this->request->getVar('desc'),
            'stock_quantity' => $this->request->getVar('qty'),
        ];
        if ($productModel->update($id, $data)) {
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
    
        return redirect()->to('/product');
    }
    
    public function massDelete()
    {
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
                'text' => 'Tidak ada produk yang dipilih.',
            ]);
            return redirect()->back();
        }

        $model = new Product();
        
        if ($model->delete($selectedItems)) {
            session()->setFlashdata('alert', [
                'icon' => 'success',
                'title' => 'Berhasil',
                'text' => 'Produk berhasil dihapus!',
            ]);
        } else {
            session()->setFlashdata('alert', [
                'icon' => 'error',
                'title' => 'Gagal',
                'text' => 'Terjadi kesalahan saat menghapus produk.',
            ]);
        }
        
        return redirect()->back();
    }
}
