<?php

namespace App\Controllers;

class UsersController extends Controller {
  public function index(): void {
    $this->view('index', [
      'users' => [
        (object) [
          'id' => 1,
          'name' => 'Bryant',
          'email' => 'bryant@email.com'
        ]
      ]
    ]);
  }
}
