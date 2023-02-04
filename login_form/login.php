<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
    <div class="header">
        <h1>Form Login</h1>
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
 <script src="app.js"></script>
</body>
</html>