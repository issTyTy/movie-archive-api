<?php

namespace App\Repository\Interface;
use App\DTO\UserDTO;

interface IUserRepository{
public function createUser(UserDTO $userDTO):bool;


}