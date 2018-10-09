<?php
/**
 * Created by PhpStorm.
 * User: Sylvain
 * Date: 29/09/2018
 * Time: 11:39
 */

class Character
{

    protected $username;
    protected $class;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }







}