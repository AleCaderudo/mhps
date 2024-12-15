<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Confirma Contato - MHPS</title>
    <link rel="stylesheet" href="style.css">
</head>	
<body>
	
	<body>
    <header class="cabecalho">
        
        <?php include 'inc/header.php'; ?>

    </header>

		<main class="apresentacao">
        <section class="apresentacao__conteudo">
			
 <div class="formulario__container contato_msg">
    
 <?php
    date_default_timezone_set('America/Sao_Paulo');

    $ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $emailconfig = "mhps@mhps.com.br";

    $cliente = "
    <html>
    <head>
        <title>Confirmação de Contato</title>
    </head>
    <body>
        <p>Caro(a) <strong>$nome</strong>,</p>
        <p>Sua mensagem foi enviada e assim que possível retornaremos.</p>
        <p>Atenciosamente,</p>
        <p>
            <strong>MHPS</strong><br>
            <a href='http://www.mhps.com.br'>www.mhps.com.br</a><br>
            E-mail: <a href='mailto:$emailconfig'>$emailconfig</a><br>
            Cel/WhatsApp: <a href='https://wa.me/555499742403's>54 999742403</a><br>
        </p>
    </body>
    </html>
    ";
    
    $nosso = "
    <html>
    <head>
        <title>Formulário de Contato</title>
    </head>
    <body>
        <h1>Mensagem enviada pelo formulário do site</h1>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Mensagem:</strong> $mensagem</p>
        <p><strong>Data do envio:</strong> " . date("d/m/Y") . " às " . date("H:i") . "</p>
        <p><strong>IP do Remetente:</strong> $ip</p>
    </body>
    </html>
    ";
    
    $headersCliente = "From: $emailconfig\r\n";
    $headersCliente .= "Reply-To: $emailconfig\r\n";
    $headersCliente .= "MIME-Version: 1.0\r\n";
    $headersCliente .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $headersNosso = "From: $email\r\n";
    $headersNosso .= "Reply-To: $email\r\n";
    $headersNosso .= "MIME-Version: 1.0\r\n";
    $headersNosso .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    if (mail($email, "Ortopedia Ortomott - Confirmação de Contato", $cliente, $headersCliente) && 
        mail("$emailconfig", "Formulário de contato do site", $nosso, $headersNosso)) {
        echo "<br><br><p class='conteudo__texto'>Caro $nome, sua mensagem foi enviada com sucesso.<br> Verifique se recebeu uma mensagem de confirmação em $email.</p><br><br>";
    } else {
        echo "<br><br><p class='conteudo__texto'>Houve um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.</p><br><br>";
    }
    ?> 


 </div>
</section>

        <img class="apresentacao__imagem" src="./assets/imagem.png" alt="Figura com códigos aleatorios">
    </main>
</body>

<footer class="rodape">

<?php include 'inc/footer.php'; ?>

</footer>

<script src="js/validaForm.js" type="module"></script>

</html>
