<?php
namespace App\Models;
use App\Models\User;

class Docteur extends User{
    public function __construct($conn = NULL, $id = NULL, $first_name = NULL, $last_name = NULL, $email = NULL, $password = NUll, $date_creation = NULL)
    {
        return parent::__construct($conn, $id, $first_name, $last_name, $email, $password, $date_creation);
    }
}