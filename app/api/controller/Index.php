<?php
namespace app\api\controller;

use app\BaseController;

class Index extends BaseController
{
    public function hello($name = 'api')
    {
        return 'hello,' . $name;
    }
}
