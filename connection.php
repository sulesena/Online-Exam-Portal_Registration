
 <?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = 'test';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if(! get_magic_quotes_gpc() ) {
               $username = (isset($_POST['username']));
               $password = (isset($_POST['password']));
               $name = (isset($_POST['name']));
               $email = (isset($_POST['email']));
               $level = (isset($_POST['level']));
               $reg_number = (isset($_POST['reg_number']));
      
                
            }else {
               $username = $_POST['username'];
               $password = $_POST['password'];
                $name = $_POST['name'];
               $email = $_POST['email'];
                $level = $_POST['level'];
               $reg_number = $_POST['reg_number'];
                 
               

            }
$sql = "INSERT INTO login (name,reg_number,email,level,username,password,servername,dbname) VALUES ('$username', '$password','$name','$reg_number','$email','$level')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?> 
<html>
	<head>
	<title>Basic Registration Script</title>


	</head>
	<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="connection.php">
Username: <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $username;?>" maxlength="20">
Password: <INPUT TYPE = 'TEXT' Name ='password'  value="<?PHP print $password;?>" maxlength="20">
name: <INPUT TYPE = 'TEXT' Name ='name'  value="<?PHP print $name;?>" maxlength="20">
Register Number: <INPUT TYPE = 'TEXT' Name ='reg_number'  value="<?PHP print $reg_number;?>" maxlength="20">
Email: <INPUT TYPE = 'TEXT' Name ='email'  value="<?PHP print $email;?>" maxlength="20">
level: <INPUT TYPE = 'TEXT' Name ='level'  value="<?PHP print $level;?>" maxlength="20">
<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Register">

</FORM>
<P>
	</body>
	</html>
