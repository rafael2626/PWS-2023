<?php
use ActiveRecord\Model;
class Folhaobra extends Model
{
    static $has_many = array(
        array('linhaobras')
    );
    static $belongs_to = array(
        array('user')
    );
}