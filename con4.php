<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="title">Registration For COVID Vaccination</div>
    <div class="content">
        <form action="connect2.php" method="post">
            <div class="user-details">
                <!-- Full Name of User -->
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your name" autocomplete="off" required>
                </div>
                <!-- Aadhaar number of User -->
                <div class="input-box">
                    <span class="details">Aadhar Number</span>
                    <input type="tel" id="aadhar" name="aadhar" placeholder="Enter your Aadhaar card number" autocomplete="off" pattern="[0-9]{12}" required>
                </div>
                <!-- Age of User -->
                <div class="input-box">
                    <span class="details">Age</span>
                    <input type="text" id="age" name="age" placeholder="Enter your age" autocomplete="off" required>
                </div>
                <!-- Phone of User -->
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your number" autocomplete="off" pattern="[0-9]{10}" required>
                    <!-- Occupation of User -->
                </div>  <div class="input-box">
                    <span class="details">Occupation</span>
                    <input type="text" id="occupation" name="occupation" placeholder="Eg.. Farmer,  Doctor" autocomplete="off" required>
                </div>
                <!-- State of User -->
                <div class="input-box">
                    <span class="details">State</span>
                    <input type="text" id="state" name="state" placeholder="Eg.. Goa, Delhi" autocomplete="off" required>
                </div>
                <!-- City/Village of User -->
                <div class="input-box">
                    <span class="details">City/Village</span>
                    <input type="text" id="city" name="city" placeholder="Enter your city/village" autocomplete="off" required>
                </div>
                
                <!-- Email id -->
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" id="email" name="email" placeholder="Enter your email id" autocomplete="off" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1" value="m">
                <input type="radio" name="gender" id="dot-2" value="f">
                <input type="radio" name="gender" id="dot-3" value="o">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Transgender</span>
                    </label> 
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
            <div class="button">
                <input type="submit" value="Check" onclick="window.location.href='check.php'">
            </div>
            
        </form>
    </div>
</div>


</body>
</html>