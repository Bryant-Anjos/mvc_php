<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>
<body>
  <a href="create.php">Create User</a>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>id</th>
        <th>name</th>
        <th>e-mail</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $key=>$user): ?>
        <tr>
          <td><?= (int) $key + 1; ?></td>
          <td><?= $user->id; ?></td>
          <td><?= $user->name; ?></td>
          <td><?= $user->email; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
