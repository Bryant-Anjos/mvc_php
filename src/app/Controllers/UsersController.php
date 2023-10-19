<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UsersController extends Controller {
  private $usersModel;

  function __construct(UsersModel $usersModel) {
    $this->usersModel = $usersModel;
  }

  public function index(): void {
    $params = $this->usersModel->getAll();
    $this->view('users/index', [
      'users' => $params
    ]);
  }

  public function create(): void {
    $this->view('users/create');
  }
}
