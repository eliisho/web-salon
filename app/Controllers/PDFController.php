<?php

namespace App\Controllers;

use App\Models\Reservation;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PDFController extends BaseController
{
    public function reservationPDF()
    {
        $page = 'Reservation';
        $noUrut = 1;
        $model = new Reservation();
        $currentMonth = date('m');
        $dataReservation = $model->select('reservations.*, members.full_name as member_name, employees.name as employee_name, services.name as service_name')
                                ->join('members', 'members.id = reservations.member_id')
                                ->join('employees', 'employees.id = reservations.employee_id')
                                ->join('services', 'services.id = reservations.service_id')
                                ->where('MONTH(tanggal)', $currentMonth)
                                ->findAll();
        return view('print/reservation' ,['data' => $dataReservation, 'page' => $page, 'noUrut' => $noUrut]);
    }
}
