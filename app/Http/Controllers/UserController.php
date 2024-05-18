<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\DTO\UserDTO;
use App\Repository\UserRepository;
use App\Repository\Interface\IUserRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }    

    public function create(CreateUserRequest $createUserRequest){
        $userDTO = UserDTO::from($createUserRequest->all());
        $user = $this->userRepository->createUser($userDTO);


        // $request->validate([
        //     'name' => "required|string",
        //     'email' => "required|string|email",    (moved to CreateUserRequest)
        //     'password' => "required|string"

        // ]);

        // $user = User::create([
        //     'name' => $CreateUserRequest->name,
        //     'email' => $CreateUserRequest->email,
        //     'password' => $CreateUserRequest->password

        // ]);
    }
}
