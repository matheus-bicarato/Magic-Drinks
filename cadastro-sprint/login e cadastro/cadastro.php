<?php
include_once "conexao.php";

if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['RG'], $_POST['CPF'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $RG = $_POST['RG'];
    $CPF = $_POST['CPF'];

    $sql = "INSERT INTO `cadastrar`(`id`, `nome`, `email`, `senha`, `RG`, `CPF`)
            VALUES (NULL, '$nome', '$email', '$senha', '$RG', '$CPF')";

    $result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: cadastro.php?msg=Novo registro criado com sucesso!");
} else {
    echo "Failed: " . mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="../img/LOGO.png" type="image/x-icon">
    <title>MAGIC DRINK</title>
</head>

<body>
    <div class="container col-11 col-md-9" id="form-container">
        <div class="row gx-5">
            <div class="col-md-6">
                <h2><i class="bi bi-cup-straw"></i> PÁGINA DE CADASTRO</h2>
                <form method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                        <label for="name" class="form-label"><i class="bi bi-person-fill"></i> Digite seu nome completo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="enail" name="email" placeholder="Digite seu E-mail" required>
                        <label for="email" class="form-label"> <i class="bi bi-envelope"></i> Digite seu email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha" required>
                        <label for="password" class="form-label"><i class="bi bi-lock-fill"></i> Digite sua senha </i></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="RG" class="form-control" id="RG" name="RG" placeholder="Digite seu RG" required>
                        <label for="password" class="form-label"><i class="bi bi-fingerprint"></i> Digite seu RG</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="CPF" class="form-control" id="CPF" name="CPF" placeholder="Digite seu CPF" required>
                        <label for="CPF" class="form-label"><i class="bi bi-wallet2"></i> Digite seu CPF</label>
                    </div>
                    <div class="mb-3">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="agree-term">
                            <label class="form-check-label" for="agree-term">
                                Concordo com os <a href="#">termos de serviço</a>
                            </label>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-primary" value="cadastrar">
                </form>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-12">
                        <img src="../img/LOGO.png" alt="Tela de cadastro" class="img-fluid">
                    </div>
                    <div class="col-12" id="link-container">
                        <a href="login.php"><i class="bi bi-check-circle-fill"></i> Eu já tenho uma conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>