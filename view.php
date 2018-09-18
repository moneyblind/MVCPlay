<?PHP
require_once("controller.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Test</title>
  </head>
  <body>
This is a view test!
My full name is: <?php echo $client->FullName(); ?>
  </body>
</html>
