<?php

class App extends MY_Controller {

    public function __construct() {
        parent::__construct();        
    }

    public function index() {
       
        $this->load->view("app/sample");
        #$this->render("app/index");
    }
}
