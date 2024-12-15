<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Pagina Inicial - MHPS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="cabecalho">
    <?php include 'inc/header.php'; ?>

    </header>
    
    <main class="apresentacao">
        <section class="apresentacao__conteudo">

            <h1 class="apresentacao__conteudo__titulo">Eleve seu negócio digital a outro nível <strong class="titulo-destaque">com um Full Stack de qualidade!
            </strong></h1>
            <p class="apresentacao__conteudo__texto">Olá! Sou Carlos Alexandre da Motta, desenvolvedor Full Stack com especialidade em HTML, CSS, PHP, JavaScript, Java, Python, bancos de dados SQL E NoSQL, AWS, Engenharia de Software, entre outros. Ajudo a desenvolver e colocar em prática, boas ideias na área de tecnologia.</p>
           
            <div class="apresentacao__links">
                <h2 class="apresentacao__links__subtitulo">Acesse minhas redes</h2>

                <a class="apresentacao__links__navegacao" href="https://github.com/AleCaderudo" target="_blank" title="Acesse meus projetos no Github">
                    <img class="link__pictures" src="./assets/github.png">Github</a>

                <a class="apresentacao__links__navegacao link_LinkdIn" href="https://www.linkedin.com/in/carlos-alexandre-da-motta-140772271" target="_blank" title="Acesse meu LinkedLn">
                    <img class="link__pictures" src="./assets/linkedin.png"><spam class="nome__link">LinkedIn</spam></a>
                
                <a class="apresentacao__links__navegacao" href="https://wa.me/5554999742403" target="_blank" title="Entrar em contato via Whatsapp">
                    <img class="link__pictures" src="./assets/whatsapp.png">Whatsapp</a>
            </div>

        </section>
        
        <img class="apresentacao__imagem" src="./assets/imagem.png" alt="Figura com códigos aleatorios">
    </main>
    <footer class="rodape">

    <?php include 'inc/footer.php'; ?>

</footer>
</body>

</html>