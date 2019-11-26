<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Singleton
 *
 * @author Office10
 */
class Singleton {
    private static $instance;
    //put your code here
    public static function getInstance() {
        if(null=== static::$instance){
            static::$instance=new static();
        }
        return static::$instance;
    }
    
}
