<?php

class App extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        $this->data['user'] = $this->ion_auth->user()->row();
    }

    public function index() {

        $this->render("app/home");
    }

    public function boxes($box = null) {
        if ($box) {
            $this->render('app/box');
        } else
            $this->render("app/boxes");
    }

    public function about() {
        $this->render("app/about");
    }

}
