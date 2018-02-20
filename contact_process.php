<?php


if(trim($_GET['Email']) == '' || trim($_GET['Name']) == '' || trim($_GET['Subject']) == '' || trim($_GET['Message']) == '') {
	echo "Please go back and fill out all fields";
}

else if(strpos($_GET['Email'],'@') === false) {
	echo "Please enter a valid email address.";
}

else {
	mail('belson@usc.edu',$_GET['Subject'].': Website Inquiry from '.$_GET['Name'],$_GET['Message'],'From: '.$_GET['Email']);
	echo "Thank you for your email.  We will respond to you shortly.";
}

?>


