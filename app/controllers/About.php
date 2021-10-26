<?php

class About
{
    //method default
    public function index($name = '', $job = '')
    {
        echo "My name $name and my job is $job";
    }

    public function page()
    {
        echo "About/page";
    }
}
