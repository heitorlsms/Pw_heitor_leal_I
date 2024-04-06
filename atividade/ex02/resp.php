<?php 
    if(isset($_POST['genero'])){
    $genero = $_POST['genero'];
    echo "<p>Gênero selecionado: $genero</p>";
    }
    echo "<h3>Idiomas selecionados:</h3>";
    if(isset($_POST['ing'])) {
        echo "<p>Inglês</p>";
    }
    if(isset($_POST['esp'])) {
        echo "<p>Espanhol</p>";
    }
    if(isset($_POST['fran'])) {
        echo "<p>Francês</p>";
    }
    
?>