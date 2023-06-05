<?php
use ActiveRecord\Model;
class Iva extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('servicos'),
        array('linasobras')
    );
}