<?php
class feesController extends Controller
{
    //Fee Due Section Starts Here 
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

    //Fee Due Section Ends Here 


    //Fee Paid Section Starts Here 
    public function fees_paid()
    {

        $this->view('fees/fees_paid');
    }

    //Fees Paid Section Ends Here 

    public function fees_invoice()
    {
        $this->view('fees/fees_invoice');
    }
   
}
