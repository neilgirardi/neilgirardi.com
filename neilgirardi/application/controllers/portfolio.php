<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller 
{
        
    function __construct() 
    {
        parent::__construct();
        
        $this->meta_tag = new Meta_tag;
        $this->meta_tag->title = "Neil Girardi's Web Portfolio";
        $this->meta_tag->description = "See Neil Girardi's web portfolio.";
        $this->meta_tag->author = 'Neil Girardi';
        $this->meta_tag->page = 'portfolio';
    }
    
    function Index()
    {
        $this->parser->parse('includes/html_head', $this->meta_tag);
        $this->load->view('includes/nav');
        $this->load->view('portfolio');
        $this->load->view( 'includes/footer');
        $this->load->view( 'includes/header');
        $this->load->view('includes/end_of_page');
    }
    
    
    
}
