<?php
/**
 * Created by PhpStorm.
 * User: jigar
 * Date: 16/10/2018
 * Time: 14:23
 */

class  Request{

    public static function uri(){
            return trim($_SERVER['REQUEST_URI'],'/');
    }

}