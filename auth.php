<?php

    /**
     * Nous créons deux variables : $email et $password qui valent respectivement "Sdz" et "salut"
     */
     
    $email = "bouzeziahmed5@gmail.com";
    $password = "ahmed";
 
    if( isset($_POST['email']) && isset($_POST['password']) ){
 
        if($_POST['email'] == $email && $_POST['password'] == $password){ // Si les infos correspondent...
            session_start();
            $_SESSION['user'] = $email;
            echo "<h2>Vous avez été connecté avec succès !</h2>";    
        }
        else{ // Sinon
            echo "<h2>Erreur lors de la connexion...</h2>";
        }
    }
?>