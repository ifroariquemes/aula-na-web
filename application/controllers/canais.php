<?php

class Canais extends MY_Controller {

    
    public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect('auth/login', 'refresh');
        }
    }

    public function index() {
        $obj = new Canal();
        $obj->where('owner',$this->user->id);
        $obj->get();
        $this->data['canais'] = $obj->all_to_array();
        $this->render("canais/home");
    }

    public function criar() {
        
        if (isset($_POST['submit'])) {
            $obj = $this->obj_from_post(array('titulo', 'descricao'), new Canal());
            $obj->oid = uniqid("oid-");
            $obj->owner = $this->user->id;
            if ($obj->save()) {
                $this->data['resposta']['error'] = 0;
                $this->data['resposta']['message'] = 'Cadastro realizado com sucesso';
                $this->data['resposta']['data'] = $obj->stored;
            }
        }
        
        $this->render("canais/criar");
    }
    
    public function show($oid = null){
        if(isset($_GET['sumario'])){
            redirect(base_url('canais/sumario/'.$oid));
        }
        $this->render('canais/canal');
    }
    
    public function sumario($oid = null, $global = FALSE){
        $this->render("canais/sumario");
    }

}
