<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'dev-mohamed'
        ];

        return $this->render('home', $params);
    }

    public function contact()
    {

        return $this->render('contact');
    }

    public function handleContent(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        die();
        return 'Handling submitted data';
    }

}