<?php

namespace App\Controller;

use Model\UserModel;
use App\View\View;

class userController
{
    public function indexAction()
    {
        $user = new UserModel();
        $users = $user->getAllUsers();

        $menus = [
          'menu1' => "menu content",
          'menu2' => "menu2 content",
          'menu3' => "menu3 content",
          'menu4' => "menu4 content"
        ];

        $sendPHP['users'] = $users;
        $sendPHP['menus'] = $menus;

        $view = View::render('user/index', $sendPHP);

    }
}
