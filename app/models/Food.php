<?php

namespace App\Models;

use Core\Model;
use PDO;
use Core\QueryBuilder;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Food extends Model
{
    use QueryBuilder;

    private $_table = 'tbl_food';

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll() {
        return (new self)->all();
    }

    public function getBy($column, $operator, $value, $select_column = '*')
    {
        return $this->where($column, $operator, $value)->get($select_column);
    }

    public function getById($id)
    {
        return $this->where('id', "=", $id)->get('*')[0];
    }

    public static function create($data)
    {
        return (new self)->insert($data);
    }
}
