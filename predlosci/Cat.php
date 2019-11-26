<?php

spl_autoload_register(function ($class) {
    include './' . $class . '.php';
});

/**
 * Description of Cat
 *
 * @author Office10
 */
class Cat {
    public $ime;
    private static $instance;
    //put your code here
    public static function getInstance() {
        if(null=== static::$instance){
            static::$instance=new static();
        }
        return static::$instance;
    }
}
