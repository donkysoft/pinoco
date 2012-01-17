<?php
/**
 * Pinoco: makes existing static web site dynamic transparently.
 * Copyright 2010-2012, Hisateru Tanaka <tanakahisateru@gmail.com>
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * PHP Version 5
 *
 * @author     Hisateru Tanaka <tanakahisateru@gmail.com>
 * @copyright  Copyright 2010-2012, Hisateru Tanaka <tanakahisateru@gmail.com>
 * @license    MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @package    Pinoco
 */

/**
 * Special Variable model as Nothing
 * @package Pinoco
 */
class Pinoco_NothingVars extends Pinoco_Vars {
    
    private static $_instance = null;
    
    /**
     * Provides the unique Nothing instance.
     * @return Pinoco_NothingVars
     */
    public static function instance()
    {
        if(self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    
    /**
     * Returns itself as globally unique NothingVars.
     * @param string $name
     * @return Pinoco_NothingVars
     */
    public function get($name)
    {
        return $this;
    }
    
    /**
     * Nothing can respond to any names.
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        return true;
    }
    
    /**
     * Every values pased to Nothing would be lost.
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function set($name, $value)
    {
    }
    
    /**
     * Every values pased to Nothing would be lost.
     * @param string $name
     * @param callable $callback
     * @return void
     */
    public function registerAsMethod($name, $callback)
    {
        $this->_vars[$name] = new Pinoco_MethodProxy($callback, $this);
    }
    
    /**
     * Every values pased to Nothing would be lost.
     * @param string $name
     * @param callable $callback
     * @param array $context
     * @return void
     */
    public function registerAsDynamic($name, $callback, $context=array())
    {
    }
    
    /**
     * Every values pased to Nothing would be lost.
     * @param string $name
     * @param callable $callback
     * @param array $context
     * @return void
     */
    public function registerAsLazy($name, $callback, $context=array())
    {
    }
    
    /**
     * Every values pased to Nothing would be lost.
     * @param mixed $src
     * @return void
     */
    public function import($src, $filter=false, $default=null, $modifier="%s")
    {
    }
    
    /**
     * Nothig as Array is empty array.
     * @return array
     */
    public function toArray($filter=false, $default=null, $modifier="%s")
    {
        return array();
    }
    
    /**
     * Nothig as Array is empty array.
     * @return array
     */
    public function toArrayRecurse($depth=false)
    {
        return array();
    }
    
    /**
     * Nothig as String is empty string.
     * @return string
     */
    public function __toString()
    {
        return "";
    }
}
