

<!DOCTYPE html>
<?php
$cookie_name = "shiv";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    ?>
    <script>
    var name = prompt("What's your name?");
    var color = prompt("What's your favorite color?");
    var animal = prompt("Dogs or cats?");
    var food = prompt("Cookies or donuts?");

    if( color != null )
        document.cookie = "color=" + color;
    if( name != null )
        document.cookie = "name=" + name;
    if( animal != null )
        document.cookie = "animal=" + animal;
    if( food != null )
        document.cookie = "food=" + food;
  </script>
  <?php

} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>