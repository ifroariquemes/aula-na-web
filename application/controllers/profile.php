<?php

class Profile extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->data['user'] = $this->ion_auth->user()->row();
        
        $this->render("profile/index");
    }
}

