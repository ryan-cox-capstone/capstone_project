<?php

switch($role){
	case ADMIN:
		require_once('users/links/admin.php');
		break;
	case STUDENT:
		require_once('users/links/student.php');
		break;
	case INSTRUCTOR:
		require_once('users/links/instructor.php');
		break;
	case SECRETARY:
		require_once('users/links/secretary.php');
		break;
	case CHAIR:
		require_once('users/links/chair.php');
		break;
}

?>