<?php
class attendanceController extends Controller
{
    public function index()
    {
        $this->view('attendance/index');
    }
    public function manage_attendance(){
        $this->view('attendance/manage_attendance');
    }
    public function view_attendance(){
        $this->view('attendance/view_attendance');
    }
}
