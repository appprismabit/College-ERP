<?php
class dashboardController extends Controller{
    public function index(){
        $this->view('dashboard/index');
    }

    public function getLatestComplaints(){
        $fetchLatestComplaintsModel = $this->model('dashboardModel');
        $data = $fetchLatestComplaintsModel->getLatestComplaints();
        echo json_encode(['success' => true, 'data' => $data]);
    }
    public function getComplainCount(){

        $countModel = $this->model('dashboardModel');

        $data = $countModel->complaintsCount();
        echo json_encode([
            'data' => $data['total'],
        ]);
    }

    public function getAreaCount(){
        $countModel = $this->model('dashboardModel');
        $data = $countModel->areaCount();
        echo json_encode([
            'data' => $data['total_area'],
        ]);
    }

    public function getTechnicianCount(){
        $countModel = $this->model('dashboardModel');
        $data = $countModel->technicianCount();
        echo json_encode([
            'data' => $data['total_technician'],
        ]);
    }

    public function getActiveTechnician(){
        $fetchActiveTechnicianModel = $this->model('dashboardModel');
        $data = $fetchActiveTechnicianModel->getActiveTechnician();
        echo json_encode(['success' => true,
         'data' => $data
         
        ]);
    }

    public function fetchTechnicianNameAndWorkCount(){//FETCHING TECHNICIAN NAME AND WORK COUNT
        $fetchTecnicianCountModel = $this->model("dashboardModel")->getchTechnicianWorkCount();
        echo json_encode([
            'success'=> true,
            'data' =>$fetchTecnicianCountModel
        ]);
    }
    
}
?>