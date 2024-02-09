<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - MHPS</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>	
<body>
	
	<body>
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <a class="cabecalho__menu__link" href="index.html">Home</a>
            <a class="cabecalho__menu__link" href="about.html">Sobre mim</a>
			<a class="cabecalho__menu__link" href="contato.html">Contato</a>
        </nav>
    </header>

<!-- content begins -->
		
		<main class="apresentacao">
        <section class="apresentacao__conteudo">
            <h1 class="apresentacao__conteudo__titulo"><strong>Contato</strong></h1>
 <p class="contato_msg">          
 <? 
$cliente = "\n Caro(a) $nome, sua mensagem foi enviada e assim que possivel retornaremos. \n Atenciosamente \n MHPS";
$nosso = "\n Nome: $nome \n \n Telefone: $telefone \n \n E-Mail: $email \n \n  Cidade: $cidade \n \n Mensagem: $mensagem \n \n \n Data do envio da mensagem ".date("d/m/Y")." as ".date("H:i")."";
mail("$email", "MHPS", $cliente ,"From: mhps@mhps.com.br");
mail("mhps@mhps.com.br", "Formulário de contato do site",$nosso,"From: $email");

?>
		  Sua mensagem foi enviada com sucesso, Obrigado. </p>
		<p>&nbsp;   </p>
  </div>
            </div>
        </section>
        <img class="apresentacao__imagem" src="./assets/imagem.jpg" alt="Figura com códigos aleatorios">
    </main>

		
   </div>
</div>
<footer class="rodape">
        <p><a class="sem_bubl" href="http://mhps.com.br" target="_blank" title="Desenvolvido por MHPS">Desenvolvido por MHPS</a></p>
    </footer>
</body>
</html>
