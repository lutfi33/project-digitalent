<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
        <h1>Login</h1>
    </div>
    <div class="container">
        <form action="" class="form" onsubmit="return validate()">
            <div class="error" style="display: none"></div>
 
            <div class="input1">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="admin@example.com" />
            </div>
 
            <div class="input1">
                <label for="password">Password</label>
                <input type="password" id="password" />
            </div>
 
            <input id="tombol" type="submit" value="Login">
        </form>
     </div>

     <script>
        var $form = document.querySelector('.form');
        var $error = document.querySelector('.error');
        var $inputFields = document.querySelectorAll('.input1');
        var $email = document.getElementById('email');
        var $password = document.getElementById('password');

        function addError(message) {
            $error.innerHTML = message;
            $error.style.display = 'block';
        }
        function removeError() {
            $error.innerHTML = '';
            $error.style.display = 'hidden';
        }
        function validate(event) {
            event.preventDefault();
            $error.style.display = 'none';
            if ($email.value !== 'admin@example.com' || $password.value !== 'password'
        ) {
            addError('Email atau password salah');
            } else {
            removeError();
            header('Location: siswa.php');
            }
        }
        $form.addEventListener('submit', validate)
     </script>
</body>
</html>