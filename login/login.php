<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/402d710096.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login">
        <div class="leftContent">
            <h1>Welcome Back 👋</h1>
            <p>Today is a new day. It's your day. You shape it.
                Sign in to start managing your projects.</p>

            <form class="form" id="loginForm">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="underline-input" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="underline-input" required>
                </div>
                <button type="submit">
                    Sign in
                </button>
            </form>
            <p id="error-message" style="color: red;"></p>
            <p id="copy">© 2023 ALL RIGHTS RESERVED</p>
        </div>
        <div class="image">
            <img src="../assets/login.jpg" alt="login picture">
        </div>
    </div>

    <script>
        const form = document.getElementById('loginForm');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', function (e) {
            e.preventDefault(); 

            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();

            if (username === 'hackXshankhar' && password === 'shankar@HACKX') {
                window.location.href = '../registered_data/registration_list.php';
            } else {
                errorMessage.textContent = 'Invalid credentials. Please try again.';
            }
        });
    </script>
</body>

</html>
