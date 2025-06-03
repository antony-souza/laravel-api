<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function findMany(string $name)
    {

        $users = ['Alice', 'Bob', 'Charlie'];

        if ($name) {
            $users = array_filter($users, function ($user) use ($name) {
                return stripos($user, $name) !== false;
            });

            $users =  array_values($users);
        }

        return response()->json($users);
    }
}
