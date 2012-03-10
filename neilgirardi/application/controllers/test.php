<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
        
    function __construct() 
    {
        parent::__construct();
        
        $this->seo = new Seo;
        $this->seo->title = "Neil Girardi's Web Portfolio";
        $this->seo->description = 'Neil Girardi is a software engineer in New York City who specializes in object-oriented web programming, pixel-perfect front-end development, Ajax, and Android applications.';
   
        $this->cdn = $this->config->item('cdn');
    }
    
    function Index()
    {
        $this->load->view('test.html');
       
    }
    
    
    
}
