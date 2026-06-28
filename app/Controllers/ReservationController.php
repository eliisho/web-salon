<?php

namespace App\Controllers;

use App\Models\Type;
use App\Models\Service;
use App\Models\Employee;
use App\Models\Reservation;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ReservationController extends BaseController
{
    protected $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new Service();
    }

    public function getServices($typeId)
    {
        if ($this->request->isAJAX()) {
            $services = $this->serviceModel->where('type_id', $typeId)->findAll();
            
            return $this->response->setJSON($services);
        }
        
        return $this->response->setStatusCode(404);
    }

    public function getServiceDetails($serviceId)
    {
        if ($this->request->isAJAX()) {
            $service = $this->serviceModel->find($serviceId);
            
            if ($service) {
                $details = [
                    'price' => $service['price'],
                    'duration' => $service['duration']
                ];
                
                return $this->response->setJSON($details);
            }
        }
        
        return $this->response->setStatusCode(404);
    }

    public function index()
    {

        $username = session()->get('username');
        $userId = session()->get('id');
   
        // Proceed with the rest of the code
        $modelEmployee = new Employee();
        $dataEmployee = $modelEmployee->findAll();
    
        $modelType = new Type();
        $dataTypes = $modelType->findAll();
    
        // Generate noTransaksi
        $modelReservation = new Reservation();
        $latestReservation = $modelReservation->orderBy('no_transaksi', 'DESC')->first();
        
        if ($latestReservation && isset($latestReservation['no_transaksi'])) {
            $lastNumber = intval(substr($latestReservation['no_transaksi'], -4));
        } else {
            $lastNumber = 0;
        }
        
        $noTransaksi = 'TRX' . date('Ymd') . sprintf('%04d', $lastNumber + 1);
    
        return view('reservation/index', [
            'dataEmployee' => $dataEmployee,
            'dataTypes' => $dataTypes,
            'username' => $username,
            'noTransaksi' => $noTransaksi,
            'userId' => $userId
        ]);
    }
    public function admin()
    {
        $page = 'Reservation';
        $noUrut = 1;
        $model = new Reservation();
        $dataReservation = $model->select('reservations.*, members.full_name as member_name, employees.name as employee_name, services.name as service_name')
        ->join('members', 'members.id = reservations.member_id')
        ->join('employees', 'employees.id = reservations.employee_id')
        ->join('services', 'services.id = reservations.service_id')
        ->paginate(10);

        return view ('reservation/admin',['page' => $page, 'data' => $dataReservation, 'noUrut' => $noUrut, 'pager' => $model->pager]);
    }

    public function prosesAddReservation()
    {
        $reservationModel = new Reservation();

        // Retrieve form data
        $noTransaksi = $this->request->getPost('no_transaksi');
        $memberId = $this->request->getPost('member_id');
        $employeeId = $this->request->getPost('employee_id');
        $typeId = $this->request->getPost('type_id');
        $serviceId = $this->request->getPost('service_id');
        $price = $this->request->getPost('price');
        $duration = $this->request->getPost('duration');
        $tanggal = $this->request->getPost('tanggal');

        $data = [
            'no_transaksi' => $noTransaksi,
            'member_id' => $memberId,
            'employee_id' => $employeeId,
            'service_id' => $serviceId,
            'price' => $price,
            'duration' => $duration,
            'tanggal' => $tanggal,
        ];

        // Save reservation
        if ($reservationModel->insert($data)) {
            // Redirect to success page
            return redirect()->to('/reservation')->with('success', 'Reservation added successfully!');
        } else {
            // Redirect back with error
            return redirect()->back()->with('error', 'Failed to add reservation. Please try again.')->withInput();
        }
    } 
    
}
