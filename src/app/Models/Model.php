<?php

namespace App\Models;

use PDO;

define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_NAME', $_ENV['DB_NAME']);

class Model {
  private $user = DB_USER;
  private $password = DB_PASSWORD;
  private $dbname = DB_NAME;
  private $host = 'postgres';
  private $port = 5432;
  private $connection;

  function __construct() {
    try {
      $connectionString = "pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;";

      $this->connection = new PDO(
        $connectionString,
        $this->user,
        $this->password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
    } catch (PDOException $error) {
      die($error->getMessage());
    }
  }

  protected function query(string $sql, array $params = []): array {
    $statement = $this->connection->prepare($sql, $params);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_OBJ);
    $result = $statement->fetchAll();
    return $result;
  }
}
