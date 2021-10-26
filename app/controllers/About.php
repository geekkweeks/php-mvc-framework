<?php

class About extends Controller
{
    //method default
    public function index($name = '', $job = '')
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $this->view('about/index', $data);
    }

    public function page()
    {
        $this->view('about/page');
    }
}
