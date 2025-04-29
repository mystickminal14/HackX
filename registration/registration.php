<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackX Registration</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/png" href="../assets/logo.png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/402d710096.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="nav">
        <div class="imgFit">
            <a href="../index.php"><img src="../assets/hackX.png" alt="HackX Logo" /></a>
        </div>

        <ul class="social-icons">
            <li><a href="https://www.instagram.com/hackxatlbef" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
            </li>
            <li><a href="https://chat.whatsapp.com/I97ZZsiJI9w5OdKvNqIPHW" target="_blank"><i
                        class="fa-brands fa-whatsapp"></i></a></i></li>
            <li><a href="https://www.linkedin.com/company/hack-x-lbef/posts/?feedView=all" target="_blank"><i
                        class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://www.facebook.com/HackXLBEF/" target="_blank"><i
                        class="fa-brands fa-square-facebook"></i></a>
            </li>
        </ul>
    </div>
    <div class="head">
        <h1>REGISTER NOW</h1>
        <p>Sign up your team (3-5 members) to compete in Nepal's largest +2 level hackathon. Select your province and
            get ready to innovate!</p>
    </div>
    <div class="req-ce">
        <div class="reg-card">

            <div class="black-section">
                <h1>Contact Information</h1>
                <p>Say something to start a live chat!</p>
                <div class="ic-div">
                    <div class="icons">
                        <i class=" fa-solid fa-user"></i>
                        <div>
                            <h2>Shankar Shrestha</h2>
                            <h2>Coordinator, HackX</h2>
                        </div>
                    </div>

                    <div class=" icons">
                        <i class="fa-solid fa-phone"></i>
                        <h2>+977 9801110839</h2>
                    </div>

                    <div class="icons">
                        <i class="fa-solid fa-envelope"></i>
                        <h2>shankar.shrestha@issnepal.org</h2>
                    </div>
                    <div class="icons">
                        <i class="fa-solid fa-location-dot"></i>
                        <h2>Maitidevi, Kathmandu</h2>
                    </div>
                </div>
                <div class="circle"></div>
                <div class="circle2"></div>
            </div>
            <div class="white">
                <form method="POST" class="form" action="registration.php" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" class="underline-input2" required>
                    </div>
                    <div class="first">
                        <div class="form-group">
                            <label for="teamName">Team Name</label>
                            <input type="text" id="teamName" name="teamName" class="underline-input" required>
                        </div>
                        <div class="form-group">
                            <label for="college">College Name</label>
                            <input type="text" id="college" name="collegeName" class="underline-input" required>
                        </div>
                    </div>
                    <div class="second">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="underline-input" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="underline-input" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="province">Select Province?</label>
                        <select id="province" name="province" required>
                            <option value="">--Select--</option>
                            <option value="province1">Province-1</option>
                            <option value="province2">Province-2</option>
                            <option value="province3">Province-3</option>
                            <option value="province4">Province-4</option>
                            <option value="province5">Province-5</option>
                            <option value="province6">Province-6</option>
                            <option value="province7">Province-7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="queries">Extra Queries</label>
                        <input type="text" placeholder="Write your message.." id="queries" name="queries" class="underline-input2">
                    </div>
                    <div class="brnD">
                        <button type="submit" name="submit" class="btn">Register Now</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <script>
        function validateForm() {
            let phone = document.getElementById("phone").value;
            let email = document.getElementById("email").value;
            const phonePattern = /^[0-9]{10}$/; 
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!phonePattern.test(phone)) {
                alert("Please enter a valid 10-digit phone number.");
                return false;
            }

            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            return true; 
        }
    </script>
</body>

</html>
<?php
include '../connection.php';
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $teamName = trim($_POST['teamName']);
    $collegeName = trim($_POST['collegeName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $province = trim($_POST['province']);
    $queries = trim($_POST['queries']);

    if (empty($name) || empty($teamName) || empty($collegeName) || empty($email) || empty($phone) || empty($province)) {
        echo "<script>alert('Please fill in all required fields.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.');</script>";
    } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
        echo "<script>alert('Phone number must be 10 digits.');</script>";
    } else {
        // Use prepared statement
        $stmt = $conn->prepare("INSERT INTO registration (full_name, team_name, college_name, email, phone, province, queries) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $teamName, $collegeName, $email, $phone, $province, $queries);

        if ($stmt->execute()) {
            echo "<script>alert('Thank you! Your hackathon registration is successful!!'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('ERROR WHILE INSERTING DATA!!');</script>";
        }
        $stmt->close();
    }
}
?>
