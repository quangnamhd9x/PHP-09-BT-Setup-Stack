<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit){
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($value)
    {
        if (count($this->stack) < $this->limit) {
            return array_unshift($this->stack, $value);
        } else {
            echo 'is Full';
            die();
        }
    }
    public function pop(){
        return array_shift($this->stack);
    }
    public function top(){
        return $this->stack[count($this->stack) -1];
    }
    public function isEmpty(){
        if (count($this->stack) < $this->limit){
            echo 'is ready!';
        }
    }
    public function getStack(){
        return $this->stack;
    }
}