<?php
    require_once('__DIR__ . /../includes/header.php');
    require_once('__DIR__ . /../includes/nav.php');
?>

<main role="main">
    <div class="container">
        <h1>Bienvenue! Veuillez entrer vos identifiants de connexion</h1>
        <form action="" class="form">
            <div class="form-group">
                <label for="email" name="email" id="email">Votre adresse mail</label>
                <input type="email" id="email">
            </div>
            <div class="form-group">
                <label for="motDePasse" name="motDePasse" id="motDePasse">Mot de passe</label>
                <input type="password" id="password">
                <button class="btn btn-warning"><a href="/src/admin.php"></a> Connexion</button>
            </div>
        </form>
    </div>
</main>

    <?php
    require_once('__DIR__ . /../includes/footer.php');
    ?>