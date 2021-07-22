<?php
namespace app\api\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index($name = 'api')
    {
        return 'index,' . $name;
    }

    public function hello($name = 'api')
    {
        return 'hello,' . $name;
    }
}
