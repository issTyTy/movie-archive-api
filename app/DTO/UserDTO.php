<?php

namespace App\DTO;
use Spatie\LaravelData\Data;


class UserDTO extends Data{
    public function __construct(
        public string $name,
        public string $email,
        public string $password

    ) {
    }

}























