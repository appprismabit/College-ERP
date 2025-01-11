<?php
class feesController extends Controller
{
    public function index()
    {
        $this->view('fees/index');
    }
    public function fees_due()
    {
        $this->view('fees/fees_due');
    }
    public function fees_due_single()
    {
        $this->view('fees/fees_due_single');
    }
}
