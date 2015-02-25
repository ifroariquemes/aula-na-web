<?php
//um só caminho
class Site extends MY_Controller {

    public function __construct() {
        parent::__construct();        
    }

    public function about(){
        $this->render("app/about");
    }
}
