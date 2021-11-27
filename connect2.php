<?php
	$fullName = $_POST['fullName'];
	$aadhar = $_POST['aadhar'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	$occupation = $_POST['occupation'];
	$state = $_POST['state'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $email=$_POST['email'];
     
        $from="From:andro.1901012@gmail.com";
        $to=$_POST['email'];
        $subject="Registration Validation";
        $message=$fullName."Your registration is successfull";
  
	// Database connection
	$conn = new mysqli('localhost','root','','covidvaccine');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$quer="SELECT COUNT(id) as total from registration";
		if($a=mysqli_query($conn,$quer))
		{
			$dat=mysqli_fetch_assoc($a);
			$tot=$dat['total'];
			$to=(int)$tot;
			if($to<20)
			{
				echo "<script>window.alert('Slots are Full!! Please Register After Some Time')</script>";
				echo "<script>window.location.href='corona.html'</script>";
			}
			else
		{
		$stmt = $conn->prepare("insert into registration(fullName, aadhar, age, phone, occupation, state, city, gender,email) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssissssss", $fullName, $aadhar, $age, $phone, $occupation, $state, $city, $gender, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
               
		
                
    if(mail($to, $subject, $message, $from))
{
   echo '<script>alert("Email sent successfully !")</script>';
}
else
{
   echo '<script>alert("Email  had not sent successfully !")</script>';
}
                $quer="set @autoid :=0;
                update registration set id = @autoid :=(@autoid+1);
                alter table registration AUTO_INCREMENT=1;";
                mysqli_multi_query($conn,$quer);
                $conn->close();
    echo '<script>window.location.href="con4.php";</script>';
	}
}
}
?>