<?php

class LinhaObra extends \ActiveRecord\Model
{
    static $has_many = array(
        array('ivas'),
        array('linasobras')
    );
    static $belongs_to = array(
        array('folhaobras'),
    );
}