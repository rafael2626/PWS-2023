<?php
use ActiveRecord\Model;
class Servico extends  Model
{

    static $validates_presence_of = array(
        array('descricao', 'message' => 'A descricao tem que ser preenchida'),
        array('precohora', 'message' => 'O preco tem que ser preenchido'),
        array('referencia', 'message' => 'A referencia tem que ser preenchida'),
    );
    static $validates_inclusion_of = array(
        array('vigor', 'in' => array ('0', '1'))
    );
    static $belongs_to = array(
    array('iva')
);
}