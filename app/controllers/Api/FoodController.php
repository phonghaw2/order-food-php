<?php

namespace App\Controllers\Api;

use App\Models\Food;
use Core\Http\Request;
use Core\Http\ResponseTrait;
use Core\Controller;
use App\Config;

class FoodController extends Controller
{
    use ResponseTrait;

    public function insert(Request $request)
    {
        $post = $request->getPost()->all();
        if (empty($post)) {
            return $this->errorResponse('The data set is empty.');
        }

        try {
            // Insert shop information...
            // Insert page information...

            // Insert data to tbl_food
            foreach ($post['data'] as $row) {
                Food::create([
                    'name'          => $row['name'],
                    'description'   => $row['desc'],
                    'price'         => $row['price'],
                    'img'           => $row['img'],
                ]);
            }

            return $this->successResponse(
                [
                    'url' => Config::SERVER_NAME . 'menu-today'
                ],
                'Data has been registered successfully!'
            );
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }
}