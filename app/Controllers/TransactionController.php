<?php

namespace App\Controllers;

use App\Models\Member;
use App\Models\Employee;
use App\Models\Service;
use App\Models\Reservation;
use App\Controllers\BaseController;

class TransactionController extends BaseController
{
    public function index()
    {
        $page = 'Transaction';
        $noUrut = 1;

        $db = \Config\Database::connect();
        $data = $db->table('transactions')
            ->select('transactions.*, members.full_name as member_name, employees.name as employee_name, services.name as service_name')
            ->join('members', 'members.id = transactions.member_id', 'left')
            ->join('employees', 'employees.id = transactions.employee_id', 'left')
            ->join('services', 'services.id = transactions.service_id', 'left')
            ->get()
            ->getResultArray();

        return view('transaction/index', [
            'page'   => $page,
            'data'   => $data,
            'noUrut' => $noUrut,
        ]);
    }
    public function markDone($id)
    {
        $db = \Config\Database::connect();
        $db->table('transactions')->where('id', $id)->update(['flag_selesai' => 1]);
        return redirect()->to('/transaction')->with('success', 'Transaction marked as done!');
    }
}