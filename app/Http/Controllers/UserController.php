<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\User\Requests\CreateUserRequest;
use App\Modules\User\Services\UserService;

class UserController extends Controller
{ 
    private UserService $_userService;

    public function __construct(UserService $userService)
    {
        $this->_userService = $userService;
    }

    public function findMany(CreateUserRequest $request): array
    {
        return $this->_userService->findMany($request);
    }
}
