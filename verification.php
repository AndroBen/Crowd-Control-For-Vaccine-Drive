<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
<div class="title">User Verification</div>
<form action="" method="POST" >
<input type="text" name="Aadhar" placeholder="Enter Aadhar Number" autocomplete="off" value="<?php if(isset($_POST['search'])) echo $_POST['Aadhar']; ?>"/>
<input type="submit" name="search" value="Search" id="b1" ><br>
<div class="button">
                <input type="submit" name="verify" value="Verified" id="b2">
</div>
</form>
<table align='center' border='1px' style='width:600px; line-height:40px;'>
<tr>
<th>Waiting Number</th>
<th>Full Name</th>
<th>Aadhar Number</th>
<th>Age</th>
<th>Phone Number</th>
<th>Occupation</th>
<th>State</th>
<th>City</th>
<th>Gender</th>
<th>Email</th>
</tr> <br>
<?php
$aadhar= $_POST['Aadhar'];
$adhar=(int)$aadhar;
$connection = new mysqli('localhost','root','','covidvaccine');
if($connection->connect_error){
		echo "$connection->connect_error";
		die("Connection Failed : ". $connection->connect_error);
	} 

if(isset($_POST['search']))
	{
	   $query="SELECT * from registration where aadhar='$adhar' ";
	   $query_run= mysqli_query($connection,$query);

           while($row = mysqli_fetch_array($query_run))
           {
            ?>
            <tr>
            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['fullName']; ?> </td>
            <td><?php echo $row['aadhar']; ?> </td>
            <td><?php echo $row['age']; ?> </td>
            <td><?php echo $row['phone']; ?> </td>
            <td><?php echo $row['occupation']; ?> </td>
            <td><?php echo $row['state']; ?> </td>
            <td><?php echo $row['city']; ?> </td>
            <td><?php echo $row['gender']; ?> </td>
            <td><?php echo $row['email']; ?> </td>
            </tr>
            <?php
           }

}
if(isset($_POST['verify']))
{
$quer="DELETE from registration where aadhar='$adhar' ";
if(mysqli_query($connection,$quer))
{
echo '<script>alert("Verification successfull !")</script>';
$queri="set @autoid :=0;
update registration set id = @autoid :=(@autoid+1);
alter table registration AUTO_INCREMENT=1;";
mysqli_multi_query($connection,$queri);
}
else
{
echo '<script>alert("Verification unsuccessfull !")</script>';
}

}
?>
</body>
</html>