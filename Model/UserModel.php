<?php

namespace Model;

class UserModel
{
    public function getAllUsers()
    {
        return [
            ['id' => 1, 'name' => 'John Doe'],
            ['id' => 2, 'name' => 'Jane Smith']
        ];
    }
}
