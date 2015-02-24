<?php

class Canal extends DataMapper {
    /*SQL
     CREATE TABLE IF NOT EXISTS `dm_canais` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `oid` varchar(32) NOT NULL,
        `titulo` varchar(255) NOT NULL,
        `descricao` varchar(255) DEFAULT 'This is awesome channel',
        `imagem` text,
        `owner` int(11) NOT NULL,
        `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
     /**/
    var $table = 'canais';
    var $default_order_by = array('titulo', 'id' => 'desc');
    var $has_one = array();
    var $has_many = array();
    var $validation = array(
        'titulo' => array(
            // example is required, and cannot be more than 120 characters long.
            'rules' => array('required', 'max_length' => 255),
            'label' => 'Título'
        ),
        'descricao' => array(
            'rules' => array('max_length' => 255),
            'label' => 'Descrição'
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
