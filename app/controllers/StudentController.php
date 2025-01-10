<?php
class StudentController extends Controller
{
    public function index()
    {
        $this->view('Student/index');
    }
    public function LLB()
    {
        $this->view('Student/LLB/index');
    }
    public function LLbStudentSingle()
    {
        $this->view('Student/LLB/LLbStudentSingle');
    }
}
