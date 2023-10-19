<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;
use Phinx\Util\Literal;

final class CreateUserTable extends AbstractMigration
{
    public function change(): void
    {
      $this->execute('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
      $table = $this->table('users', ['id' => false, 'primary_key' => 'id']);
      $table->addColumn('id', 'uuid', [
        'default' => Literal::from('uuid_generate_v4()')
      ])
      ->addColumn('name', 'string', [ 'limit' => 100 ])
      ->addColumn('email', 'string', [ 'limit' => 100 ])
      ->addIndex(['email'], ['unique' => true])
      ->addTimestamps()
      ->create();
    }
}
