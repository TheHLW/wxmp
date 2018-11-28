<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return '这是第一次的改动';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
