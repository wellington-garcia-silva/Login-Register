<?php

session_start();

$name = $_SESSION['name'] ?? null;
$alerts = $_SESSION['alerts'] ?? [];
$active_form = $_SESSION['active_form'] ?? '';

session_unset();

if ($name !== null) $_SESSION['name'] = $name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Full Stack com Login e Registro | Wellington Garcia Silva</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header>
        <a href="#" class="logo">Logo</a>

        <nav>
            <a href="#">Início</a>
            <a href="#">Sobre</a>
            <a href="#">Coleções</a>
            <a href="#">Contato</a>
        </nav>

        <div class="user-auth">
            <?php if (!empty($name)): ?>

                <div class="profile-box">
                    <div class="avatar-circle"><?= strtoupper($name[0]); ?></div>
                    <div class="dropdown">
                        <a href="#">Minha Conta</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
                
            <?php else: ?>
            <button type="button" class="login-btn-modal">Login</button>
            <?php endif; ?>

        </div>

    </header>

    <section>
        <h1>Olá  <?= $name ?? 'Desenvolvedor' ?>!</h1>

    </section>

    <?php if (!empty($alerts)): ?>

        <div class="alert-box">
            <?php foreach ($alerts as $alert): ?>
            <div class="alert <?= $alert['type']; ?>">
                <i class='bx <?= $alert['type'] === 'success' ? 'bxs-check-circle' : 'bxs-x-circle'; ?>'></i> 
                <span> <?= $alert['message']; ?> </span>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="auth-modal <?= $active_form === 'register' ? 'show slide' : ($active_form === 'login' ? 'show' : ''); ?>">
        <button type="button" class="close-btn-modal"><i class='bx  bx-x' ></i></button>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bxr bxs-envelope'></i> 
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bxr bxs-lock'></i> 
                </div>

                <button type="submit" name="login_btn" class="btn">Login</button>
                <p>Não tem uma conta? <a href="#" class="register-link">Cadastrar</a></p>
            </form>
        </div>

        <div class="form-box register">
            <h2>Cadastrar</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="text" name="nome" placeholder="Nome" required>
                    <i class='bx bxs-user'></i>  
                </div>
                
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bxr bxs-envelope'  ></i> 
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bxr bxs-lock'></i> 
                </div>

                <button type="submit" name="register_btn" class="btn">Login</button>
                <p>Já tem uma conta? <a href="#" class="login-link">Login</a></p>
            </form>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>