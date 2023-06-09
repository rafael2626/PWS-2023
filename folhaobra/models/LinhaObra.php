<?php

class LinhaObra extends \ActiveRecord\Model
{

    static $belongs_to = array(
        array('folhaobra'),
        array('servico'),
    );
}