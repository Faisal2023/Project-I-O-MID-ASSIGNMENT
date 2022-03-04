<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>
</head>
<body>

	<h1>Registration Action</h1>

	<?php 

	$firstnameerr = $lastnameerr = $gendererr = $emailerr = $presentadderr = $parmanentadderr = $phoneerr  = $weberr = $usenameerr = $passerr = $cpasserr  = "";
	$isvalid = true;
	$ischecked = false;

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);

				return $data;
			}

			$firstname = test($_POST['fname']);
			$lastname = test($_POST['lname']);
			$gender= test($_POST['gender']);
			
			$email = test($_POST['email']);
			$presentadd = test($_POST['presentadd']);
			$permanentadd = test($_POST['permanentadd']);
			$phone = test($_POST['phone']);
			$web = test($_POST['web']);
			$username = test($_POST['username']);
			$pass = test($_POST['password']);
			$cpass = test($_POST['confirmpass']);


			$ischecked = true;

		if(empty($firstname)){
			$isvalid = false;
			$firstnameerr = "First name can not be empty";
			echo $firstnameerr;
			echo "<br><br>";

		}
		if(empty($lastname)){
			$isvalid = false;
			$lastnameerr = "Last name can not be empty";
			echo $lastnameerr;
			echo "<br><br>";
		}
		if(empty($gender)){
			$isvalid = false;
			$gendererr =  "gender must be selected";
			echo $gendererr;
			echo "<br><br>";		
		}
		
		
		

		if(empty($email)){
			$isvalid = false;
			$emailerr = "Email Address must be written";
			echo $emailerr;
			echo "<br><br>";
		}

	
		if(empty($presentadd)){
			$isvalid = false;
			$presentadderr = "Present Address must be written";
			echo $presentadderr;
			echo "<br><br>";
		}
		if(empty($permanentadd)){
			$isvalid = false;
			$parmanentadderr = "Permanent Address must be written";
			echo $parmanentadderr;
			echo "<br><br>";
		}
		if(empty($phone)){
			$isvalid = false;
			$phoneerr = "Phone number can not be empty";
			echo $phoneerr;
			echo "<br><br>";
		}

		
			if(empty($web)){
			$isvalid = false;
			$weberr = "Website Address must be written";
			echo $weberr;
			echo "<br><br>";
		}
			if(empty($username)){
			$isvalid = false;
			$usenameerr = "Username must be written";
			echo $usenameerr;
			echo "<br><br>";
		}
			if(empty($pass)){
			$isvalid = false;
			$passerr = "Password must be written";
			echo $passerr;
			echo "<br><br>";
		}	
		if(empty($cpass)){
			$isvalid = false;
			$cpasserr = "Confirm password must be written";
			echo $cpasserr;
			echo "<br><br>";
		}
		if($pass!=$cpass){
			$isvalid = false;
			echo "Password must be matched";
			echo "<br><br>";

		}
	}



		if ($ischecked and $isvalid) { 

			echo "Personal information :";

			echo "<br><br>";

			echo "First Name: " . $_POST['fname'];
			
			echo "<br><br>";


			echo "Last Name: " . $_POST['lname'];
			
			echo "<br><br>";

			echo "Gender :" . $_POST['gender'];

			echo "<br><br>";
			
			echo "email :" . $_POST['email'] ;

			echo "<br><br>";

			echo "Contact Information :";

			echo "<br><br>";

			echo "Present Address :" . $_POST['presentadd'];
			
			echo "<br><br>";


			echo "Permanant Address :" . $_POST['permanentadd'];
			
			echo "<br><br>";

			echo "phone :" . $_POST['phone'];

			echo "<br><br>";

			
			echo "Website :" . $_POST['web'];

			echo "<br><br>"; 

			echo "Credentials :";

			echo "<br><br>";

			echo "Username :" . $_POST['username'];
			
		
			echo "<br><br>";

			echo "congratulaton, You are successfully registerd";
		}
	
	
		else if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
			echo "Form is not filled properly";
			echo "<br><br>";

		}
			



			define("user.json", "data.json");
$handle =fopen("user.json","w");
$data = array("First name" => $firstname, "Last name"=> $lastname, "Gender"=> $gender  , "Present Address"=> $presentadd , "Permanent Address"=> $permanentadd , "Phone"=> $phone , "Email"=> $email , "Website"=> $web, "Username"=> $username);
echo "<br><br>";
$data = json_encode($data);
fwrite($handle, $data);
fclose($handle);
				

			

		
	?>
	<hr><hr>
	
	<a href="registration.html">Signup</a>

</body>
</html>