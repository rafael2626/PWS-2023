<?php
use ActiveRecord\Model;
class User extends ActiveRecord\Model
{
   static $validates_presence_of = array(
        array('username', 'message' => 'O nome tem que ser preenchida'),
        array('password', 'message' => 'A password tem que ser preenchido'),
        array('email', 'message' => 'O email tem que ser preenchido'),
        array('telefone', 'message' => 'O telefone tem que ser preenchido'),
        array('nif', 'message' => 'O nif tem que ser preenchido'),
        array('morada', 'message' => 'A morada tem que ser preenchida'),
        array('localidade', 'message' => 'A localidade tem que ser preenchida'),
        array('codigopostal', 'message' => 'O codligo postal tem que ser preenchida'),
        array('role', 'message' => '0 role tem que ser preenchido'),
    );
   static $validates_size_of = array(
        array('username', 'maximum' => 20),
        array('password', 'maximum' => 20),
        array('email', 'maximum' => 60),
        array('morada', 'maximum' => 20),
        array('nif', 'maximum' => 11),
        array('codigopostal','maximum' => 7),
        array('localidade','maximum' => 50),
        array('role', 'maximum' => 15)
    );

    static $validates_inclusion_of = array(
        array('role', 'in' => array ('admin', 'funcionario', 'cliente'))
    );

    static $has_many = array(
        array('folhaobras')
    );
}