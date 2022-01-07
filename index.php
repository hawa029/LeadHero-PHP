<?php
    require_once('__DIR__ . /../includes/header.php');
    require_once('__DIR__ . /../includes/nav.php');
?>

<main role="main">
    <div class="container">
        <h1 class="display-4">Bienvenue dans cette espace dédié à la passion de <strong>PHP</strong></h1>
        <img class="img-fluid" src="images/ethan-robertson-SYx3UCHZJlo-unsplash.jpg" alt="">
        <p class="display-6">Je suis très heureux de vous accueillir dans cet espace qui reste
            un chantier. Il y a encore beaucoup à faire. Soyez donc indulgents. Merci de patienter. 
            Et revenez surtout pour voir l'avancée des travaux. MERCI !
        </p>
    </div>
    <hr>
    <section id="forward-content"> 
        <div class="container display-6">
        <?php
        $numbers = range(1, 6);
        shuffle($numbers);
        foreach($numbers as $number) {
            echo  $number. ', ';
            }
        echo '<br>';
         $input = array("Neo", "Morpheous", "Trinity", "Cypher", "Tank");
         $rand_keys = array_rand($input, 2);
         echo $input[$rand_keys[0]] . "\n";
         echo $input[$rand_keys[1]] . "\n";
        ?>
        </div>  
    </section>
</main>









<?php
    
    require_once('__DIR__ . /../includes/footer.php');
    
?>
 

