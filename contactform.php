<html>
<?php
    $n = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['phone'];
    $c = $_POST['comment'];
    $conn = new mysqli("localhost","root","","myschool");		//create connection
	if($conn->connect_error){
		die("Connection Failed :" . $conn->connect_error);
	}
	if(empty($n)){
		echo "Name cannot be blank. Please go back and correct the issue.!";
		die();
	}
	if(empty($e)){
		echo "E-mail cannot be blank. Please go back and correct the issue.!";
		die();
	}
	if(empty($p)){
		echo "Phone Number cannot be blank. Please go back and correct the issue.!";
		die();
	}
    $sql = "insert into mypeople (Name, E-mail, Phone, Comment) values('$n','$e','$p','$c')";
    if($conn->query($sql) === TRUE)	
		echo "Thanks for viewing our website...";
    else
		echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
?>
</html>