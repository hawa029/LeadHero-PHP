<?php
    require_once('__DIR__ . /../includes/header.php');
    require_once('__DIR__ . /../includes/nav.php');
?>

<main role="main">
        <section class="row" id="userList">
            <?php
                $mainTitle= 'Administration de votre site';
                $pageTitle = 'Liste des utilisateurs';
                $users = ['John', 'Lili', 'Clemence', 'Fred', 'Andy'];
                $users[5] = 'Jean Paul';
            ?>

            <h1><?=strtoupper($mainTitle)?></h1>
            <h2><?=ucfirst($pageTitle)?></h2>
            <table class="table">
                <caption></caption>
                <thead>
                    <tr>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($users as $user){
                            ?>
                            <tr>
                               <td><button class="btn btn-warning">Afficher</button></td>
                                <td><?=$user?></td>
                                <td><button class="btn btn-primary"><a href="#"></a>Supprimer</button></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            <p>Votre site dispose de <strong><?= count($users) ?></strong> utilisateurs. </p>
        </section>
        <section class="row" id="userInfo">
            <h1 class="display-4">Vous avez un nouvel inscrit</h1>
            <h2 class="display-6">Son nom est : <?=$users[5]?></h2>
        </section>
    </main>

    <?php
    require_once('__DIR__ . /../includes/footer.php');
    ?>