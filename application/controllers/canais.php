<?php

/* Tópicos
 * Cada turma deverá desenvolver seu sumário?
 */

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
        $obj->where('owner', $this->user->id);
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

    public function show($oid = null) {
        if (isset($_GET['sumario'])) {
            redirect(base_url('canais/sumario/' . $oid));
        }
        $this->render('canais/canal');
    }

    public function sumario($oid = null, $item = null) {
        if(isset($_GET['up']) && $item){
            $this->up($item);
        }
        if(isset($_GET['down']) && $item){
            $this->down($item);
        }
        $obj = new Tema();
        $obj->where('canal',$oid);
        $obj->get();
        $this->data['temas'] = $obj->all_to_array();
        $this->render("canais/sumario");
    }

    public function add_item_sumario($oid = null) {
        if (isset($_POST['submit']) && $oid) {
            $obj = $this->obj_from_post(array('titulo'), new Tema());
            $obj->canal = $oid;
            $obj->owner = $this->user->id;
            if ($obj->save()) {
                $this->data['resposta']['error'] = 0;
                $this->data['resposta']['message'] = 'Cadastro realizado com sucesso';
                $this->data['resposta']['data'] = $obj->stored;
                redirect("canais/sumario/".$oid);
            }
        } else
            $this->render("canais/add_item_sumario");
    }

    public function busca() {
        $this->data['termo'] = $this->input->get('termo');
        $obj = new Canal();
        $obj->like("titulo", $this->data['termo']);
        $obj->get();
        $this->data['canais'] = $obj->all_to_array();
        $this->render("canais/busca");
    }
    
    private function up($id){
        $obj = new Tema();
        $obj->get_by_id($id);
        if($obj->owner == $this->user->id){
            $obj->ordem = $obj->ordem - 1;
            $obj->save();
        }
    }
    
    private function down($id){
        $obj = new Tema();
        $obj->get_by_id($id);
        if($obj->owner == $this->user->id){
            $obj->ordem = $obj->ordem + 1;
            $obj->save();
        }
    }
}
