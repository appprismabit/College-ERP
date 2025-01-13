<?php
class examController extends Controller
{
    public function index()
    {
        $this->view('exam/index');
    }

    public function exam_details_single()
    {
        $this->view('exam/exam_details_single');
    }
}
