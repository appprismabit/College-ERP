<?php
class CourseController extends Controller
{
    public function index()
    {
        $this->view('course/index');
    }

    public function course_single(){
        $this->view('course/course_single');
    }
}
