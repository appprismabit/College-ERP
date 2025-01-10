<?php
class SISController extends Controller
{
    public function index()
    {
        $this->view('SIS/index');
    }

    public function add_admission()
    {
        $this->view('SIS/add_admission');
    }

    public function student_list()
    {
        $this->view('SIS/student_list');
    }
}
