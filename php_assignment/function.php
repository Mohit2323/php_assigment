<?php

function redirectTo($page){
	echo "<script>
	window.location='$page';
	</script>";
}

function notify($msg){
	echo"<script>
	alert('$msg');
	</script>";

}


?>