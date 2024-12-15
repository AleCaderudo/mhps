<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Contato - MHPS</title>
    <link rel="stylesheet" href="style.css">
</head>	
<body>
	
	<body>
    <header class="cabecalho">

        <?php include 'inc/header.php'; ?>

    </header>

<!-- content begins -->
		
		<main class="apresentacao">
        <section class="apresentacao__conteudo">
            <h1 class="apresentacao__conteudo__titulo"><strong>Contato</strong><br></h1>
           
            
			<p class="contato_msg">Inicie uma conversa no <a class="contato__link__whatss" href="https://wa.me/5554999742403" target="_blank" title="Entrar em contato via Whatsapp">Whatsapp</a></p>
			
            <p class="contato_msg">Ou caso prefira pode me mandar uma mensagem utilizando o formulário abaixo:</p>

 <div class="formulario__container">
    
     <form method="POST" name="myform" action="contatoinsert.php" data-formulario  class="principal__formulario"  >

     <fieldset class="formulario__campo">
         <label class="campo__etiqueta" for="nome">Nome: </label>
         <div class="campo__escrita__container">
         <input name="nome" id="nome" class="campo__escrita" type="text" minlength="3" required />
         <span class="mensagem-erro">Campo obrigatório</span>
         </div>
     </fieldset>

     <fieldset class="formulario__campo">
         <label class="campo__etiqueta" for="email">E-mail:</label>
         <div class="campo__escrita__container">
         <input name="email" id="email" class="campo__escrita" type="email" minlength="6" required />
         <span class="mensagem-erro">Campo obrigatório</span> 
         </div>
     </fieldset>

     <fieldset class="formulario__campo">
         <label class="campo__etiqueta" for="telefone">Telefone:</label>
         <div class="campo__escrita__container">
         <input name="telefone" id="telefone" class="campo__escrita" type="tel" minlength="6" pattern="\d{10,}"/>
         <span class="mensagem-erro"></span>
         </div>
     </fieldset>

     <fieldset class="formulario__campo">
         <label class="campo__etiqueta" for="mensagem">Mensagem:</label>
         <div class="campo__escrita__container">
         <textarea  name="mensagem" id="mensage" class="campo__escrita__text" rows="6" cols="50" minlength="5" required ></textarea>
         <span class="mensagem-erro">Campo obrigatório</span>
         </div>
     </fieldset>

     <input value="Enviar" class="formulario__botao" id="enviar" data-botao-enviar type="submit">
</form>

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
