<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UsersController extends Controller {
  private $usersModel;

  function __construct() {
    $this->usersModel = new UsersModel();
  }

  public function index(): void {
    $params = $this->usersModel->getAll();
    $this->view('index', [
      'users' => $params
    ]);
  }
}
