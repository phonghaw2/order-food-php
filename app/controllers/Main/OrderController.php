<?php

namespace App\Controllers\Main;

use Core\View;
use App\models\User;
use Core\Controller;
use App\Enum\RoleUserEnum;
use App\Models\Food;

class OrderController extends Controller
{
    public array $data_ary;

    protected function before()
    {
        // if (!isLogged()) {
        //     header('Location: /');
        //     exit;
        // }

        $this->data_ary['title'] = 'Dashboard';
        $this->data_ary['nav'] = $this->getNavItem();
    }

    protected function after()
    {
        View::render('main/layouts/master.php', $this->data_ary);
    }

    public function indexAction()
    {
        $this->data_ary['content'] = 'main/menu';
        $this->data_ary['active'] = 'Today';
        $this->data_ary['foods'] = Food::getAll();
    }

    /**
     * Get navigation item
     *
     * @return array
     */
    public function getNavItem() {
        return [
            'Home' => [
                'href' => '#',
                'icon-name' => 'home-outline',
            ],
            'Today' => [
                'href' => 'menu-today',
                'icon-name' => 'fast-food-outline',
            ],
            'Debt' => [
                'href' => '#',
                'icon-name' => 'cash-outline',
            ],
            'Friends' => [
                'href' => '#',
                'icon-name' => 'person-outline',
            ],
        ];
    }
}
