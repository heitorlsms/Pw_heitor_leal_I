<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $senha=$_POST['senha'];
    $profi=$_POST['profissão'];
    $desc=$_POST['descrição'];

    echo "<p>Nome:$nome</p>";
    echo "<p>Idade:$idade</p>";
    echo "<p>Senha:$senha</p>";
    echo "<p>Profissão:$profi</p>";
    echo "<p>Descrição:$desc</p>";
}
else{
    echo "Os valores do formulário não foram recebidos.";
}
?>