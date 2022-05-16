<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
  </head>
  <body>
    <h1>Profile</h1>
    <?php
    if($errors->any()) {
      foreach($errors->all() as $error) {
        echo '<p style="color: red;">'.e($error).'</p>';
      }
    }
    ?>
    <form action="/requestapp/public/profile/confirm" method="POST">
      <?php echo e(csrf_field()); ?>
      <table>
        <tr>
          <th>ユーザー名</th>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <th>パスワード</th>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
          <th>現在地</th>
          <td>（緯度）<input type="text" name="latitude">（経度）<input type="text" name="longitude"></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="送信"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
