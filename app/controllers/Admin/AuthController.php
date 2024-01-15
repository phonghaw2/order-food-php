<?php

namespace App\Controllers\Admin;

use Core\View;
use App\models\User;
use Core\Controller;
use Core\Http\Request;
use App\Enum\RoleUserEnum;

class AuthController extends Controller
{
    public array $data_ary;

    protected function before()
    {
        if (isLogged()) {
            header('Location: /admin');
            exit;
        }

        $this->data_ary['title'] = 'Login';
    }

    protected function after()
    {
    }

    public function loginAction()
    {
        View::render('auth/login.php');
    }

    public function loginProcessAction(Request $request)
    {
        $post = $request->getPost();

        $username = $post->get('username');
        $password = $post->get('password');

        $user = new User();
        $inputUser = $user->table('user')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->first();

        if (!$inputUser) {
            $this->data_ary['error'] = 'input-error';
            
            header("Location: /");
            exit;
        }

        $user_ary = [
            'id' => $inputUser['id'],
            'name' => $inputUser['name'],
            'role' => $inputUser['role'],
            'avatar_image' => $inputUser['avatar_image'],
        ];

        $request->saveUser($user_ary);

        if ($user_ary['role'] == RoleUserEnum::ADMIN) {
            header('Location: /admin');
        } else {
            header('Location: /thuc-don-hom-nay');
        }
    }

    public function logout(Request $request)
    {
        $request->deleteUser();

        header('Location: /');
        exit;
    }
}
