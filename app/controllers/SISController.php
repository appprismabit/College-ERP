<?php
class SISController extends Controller
{
    public function index()
    {
        $this->view('sis/index');
    }

    public function add_admission()
    {
        $this->view('sis/add_admission');
    }

    public function student_list()
    {
        $this->view('sis/student_list');
    }
    public function student_single()
    {
        $this->view('sis/student_single');
    }
}
