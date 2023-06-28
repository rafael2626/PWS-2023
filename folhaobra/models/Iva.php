<?php

use ActiveRecord\Model;

class Iva extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('percentagem', 'message' => 'A percentagem tem que ser preenchida'),
        array('descricao', 'message' => 'A descricao tem que ser preenchida'),
        array('vigor', 'message' => '   Tem que ser preenchida'),
    );
    static $validates_size_of = array(
        /*11*/
        array('percentagem', 'maximum' => 2),
        /*kk*/
        array('descricao', 'maximum' => 20),



    );
    static $validates_inclusion_of = array(
        array('vigor', 'in' => array ('0', '1'))
    );

}