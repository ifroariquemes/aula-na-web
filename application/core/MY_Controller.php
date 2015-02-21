<?php

class MY_Controller extends CI_Controller {

    public $resposta = array(
        'error' => 1,
        'message' => 'Não foi possível realizar esta operação!',
        'data' => ''
    );
    public $_array = array();

    public function __construct() {
        parent::__construct();
        $this->_array['ulink'] = '?' . http_build_query($_GET, '', "&");

        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect('auth/login', 'refresh');
        }
    }

    /*
     * RENDER: Função de renderizar e encaminhar variáveis pela '_array' na view.
     */

    public function render($view) {
        $this->load->view("components/head");
        $this->load->view($view, $this->_array);
        $this->load->view("components/foot");
    }

    /*
     * Capturar dados de uma requisão POST e retornar tudo em um array.
     */

    public function array_from_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }

    public function obj_from_post($fields, $obj) {
        foreach ($fields as $field) {
            $obj->$field = $this->input->post($field);
        }
        return $obj;
    }
}
