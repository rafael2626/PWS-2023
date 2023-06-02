<?php
use ActiveRecord\Model;
class Servico extends  Model
{
    static $belongs_to = array(
        array('iva')
    );
    static $validates_presence_of = array(
        array('descricao', 'message' => 'A descricao tem que ser preenchida'),
        array('preco', 'message' => 'O preco tem que ser preenchido'),
        array('hora', 'message' => 'A hora tem que ser preenchida'),
    );
}