<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repository\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct()
    {
      $this->userRepository = new UserRepository();
    }

    public function index(Request $request){
        $results = $this->userRepository->index($request);
        return $results;
    }
}
