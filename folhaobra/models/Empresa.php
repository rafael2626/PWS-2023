<?php
use ActiveRecord\Model;
class Empresa extends Model
{
   static $validates_presence_of = array(
        array('designacao', 'message' => 'A designacao tem que ser preenchida'),
        array('email', 'message' => 'O email tem que ser preenchido'),
        array('telefone', 'message' => 'O telefone tem que ser preenchido'),
        array('nif', 'message' => 'O nif tem que ser preenchido'),
        array('morada', 'message' => 'A morada tem que ser preenchido'),
        array('codigopostal', 'message' => 'O codigo postal tem que ser preenchido'),
        array('localidade', 'message' => 'A localidade tem que ser preenchida'),
        array('capital', 'message' => 'O capital tem que ser preenchido')

    );
    static $validates_size_of = array(
        /*kk*/
        array('designacao', 'maximum' => 20),
        array('telefone', 'maximum' => 9),
        array('nif', 'maximum' => 9),
    );
}