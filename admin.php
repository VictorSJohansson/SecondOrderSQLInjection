<?php
session_start();
if (isset($_SESSION['admin_id'])){
echo "You did it!";
}
else{
	echo "You're not allowed in here with all the cool guy stuff!";
}

?>