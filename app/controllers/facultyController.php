<?php
class facultyController extends Controller
{
    public function index()
    {
        $this->view('faculty/index');
    }

    public function addFaculty()
    {
        $this->view('faculty/add');
    }

    public function listFaculty()
    {
        $this->view('faculty/list');
    }
}
