<?php
if(isset($_COOKIE['nisu'])){
	print_r($_COOKIE);
echo "<div>I can tell you've been here before</div>";
} else {
setcookie('nisu', true, 60+ time());// hold for a min
echo "<div>Its your first time being here</div>";
}
?>