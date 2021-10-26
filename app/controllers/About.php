<?php

class About extends Controller
{
    //method default
    public function index($name = '', $job = '')
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['title'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'My Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');        
    }
}
