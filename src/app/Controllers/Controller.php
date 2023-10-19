<?php

namespace App\Controllers;

class Controller {
  protected function view(string $name, array $params = []): void {
    extract($params);
    $path = $_SERVER['DOCUMENT_ROOT'] . '/app/Views/' . $name . '.php';
    include $path;
  }
}
