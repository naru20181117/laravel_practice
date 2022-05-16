<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
  </head>
  <body>
    <h1>Greeting</h1>
    <?php
    if($errors->any()) {
      foreach($errors->all() as $error) {
        echo '<p style="color: red;">'.e($error).'</p>';
      }
    }
    ?>
    <form action="/requestapp/public/greeting/welcome" method="POST">
      <?php echo e(csrf_field()); ?>
      <input type="text" name="username">
      <input type="submit" name="送信">
    </form>
  </body>
</html>
