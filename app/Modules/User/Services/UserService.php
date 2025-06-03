<?php

namespace App\Modules\User\Services;

use App\Modules\User\Requests\CreateUserRequest;
use Illuminate\Support\Arr;

class UserService
{

  public function __construct() {}

  public function findMany(CreateUserRequest $dto)
  {
    if (!$dto) {
      throw new \BadFunctionCallException(
        'The CreateUserRequest DTO is required to process user data.'
      );
    }

    $data = Arr::only($dto->validated(), ['name', 'email']);
    return [
      'message' => 'User data processed successfully',
      'data' => $data,
    ];
  }
}
