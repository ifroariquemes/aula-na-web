<?php


class Tema extends DataMapper{
    /*   
    CREATE TABLE dm_temas(
    id int(11) not null auto_increment primary key,
    titulo varchar(100) not null,
    canal varchar(32) not null,
    ordem int(3) not null default 999,
    owner int(11) not null,
    created timestamp,
    updated timestamp
    )
     */
    var $table = 'temas';
    var $default_order_by = array('ordem' => 'cresc');
    var $has_one = array();
    var $has_many = array();
    var $validation = array(
        'titulo' => array(
            // example is required, and cannot be more than 120 characters long.
            'rules' => array('required', 'max_length' => 100),
            'label' => 'Título'
        )
    );
    
    var $created_field = 'created_on';
    var $updated_field = 'updated_on';
    var $local_time = TRUE;
    var $unix_timestamp = TRUE;

    function __construct($id = NULL) {
        parent::__construct($id);
    }
}
