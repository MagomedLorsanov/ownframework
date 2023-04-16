<?php

namespace app\controllers;
use app\core\Request;
use app\core\Controller;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            echo '<pre>';
            var_dump($request);
            echo '</pre>';
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());
           
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Seccess';
            }
            return $this->render('register', [
                'model' =>$registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' =>$registerModel
        ]);
    }
}