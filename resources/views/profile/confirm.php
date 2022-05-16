<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm | Profile</title>
  </head>
  <body>
    <h1>Confirm</h1>
    <table>
      <tr>
        <th>ユーザー名</th>
        <td><?php echo e($username); ?></td>
      </tr>
      <tr>
        <th>パスワード</th>
        <td><?php echo e($password); ?></td>
      </tr>
      <tr>
        <th>現在地</th>
        <td>（緯度）<?php echo e($latitude); ?>度（経度）<?php echo e($longtitude); ?>度</td>
      </tr>
    </table>
  </body>
</html>
