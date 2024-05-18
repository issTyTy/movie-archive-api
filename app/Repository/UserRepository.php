<?php


namespace App\Repository;
use App\Repository\Interface\IUserRepository;
use App\Models\User;
use App\DTO\UserDTO;


class UserRepository implements IUserRepository{
    public function createUser(UserDTO $userDTO):bool
    {
       if(User::create($userDTO->toArray())){
        return true;
        
    }
    return false;

    
}}