<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <nav>
        <h3 class="text-center">Perpustakaan Digitalent</h3>
    </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div id="masukan" class="col-md-4">
                    <form method="post" action="cek_login.php">
                        <div class="mb-3 mt-3">
                            <label for="label-user" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user" id="label-user">
                        </div>
                        <div class="mb-3">
                            <label for="label-password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" id="label-password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-3">Login</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

<footer>
    <div class="container"></div>
</footer>
<!-- javascript bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>