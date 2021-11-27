<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
<div class="title">Waiting Number</div>
<form action="" method="POST" >
<input type="text" name="Aadhar" placeholder="Enter Aadhar Number" autocomplete="off" value="<?php if(isset($_POST['search'])) echo $_POST['Aadhar']; ?>"/>
<div class="button">
                <input type="submit" name="search" value="Check" id="b2">
</div>
</form>
<table align='center' border='1px' style='width:600px; line-height:40px;'>
<tr>
<th>Waiting Number</th>
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
	   $query="SELECT id from registration where aadhar='$adhar' ";
           $query_run= mysqli_query($connection,$query);

           while($row = mysqli_fetch_array($query_run))
           {
            ?>
            <tr>
            <td><?php echo $row['id']; ?> </td>
            </tr>
            <?php
           }

}
?>
</body>
</html>