<?php

namespace App\Models;

class UsersModel extends Model {
  public function getAll() {
    $sql = 'SELECT id, name, email FROM users;';
    $result = $this->query($sql);
    return $result;
  }
}
