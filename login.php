<?php
 include_once "conexao.php";

 if (isset($_POST['email'], $_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastrar WHERE email = '$email' AND senha = '$senha'";
    
    $result = mysqli_query($conn, $sql);

    

if ($result->num_rows == 0) {
    echo "Failed: algo deu errado seu puto " . mysqli_error($conn);
    } else {   
        header("Location: index.html?msg=caralhoviado!");
    }


}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="img/LOGO.png" type="image/x-icon">
    <title>MAGIC DRINK</title>
</head>

<body>
    <div class="container col-11 col-md-9" id="form-container">
        <div class="row alling-items-center gx-5">
            <div class="col-md-6 order-md-2">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2><i class="bi bi-cup-straw"></i> PÁGINA DE LOGIN</h2>
                <form method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                        <label for="email" class="form-label"><i class="bi bi-envelope"></i> Digite seu email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha">
                        <label for="password" class="form-label"><i class="bi bi-lock-fill"></i> Digite sua senha</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="entrar">
                </form>
            </div>
            <div class="col-md-6 order-md">
                <div class="col-12">
                    <img src="img/LOGO.png" alt="Computador Login" class="img-fluid">
                </div>
                <div class="col-12" id="link-container">
                    <a href="cadastro.php"><i class="bi bi-exclamation-circle-fill"></i>Ainda não tenho cadastro</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>