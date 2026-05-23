<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Prensadão Dogueria</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="sobre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <a href="index.php" title="Home">
            <img src="Fotos/Vermelho-removebg-preview.png" alt="Logo" title="Logo" class="logo">
        </a>
         <a href="javascript:menu()" class="header-menu">
            <i class="fas fa-bars menu-btn"></i>
        </a>
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="cardapio.php">Cardápio</a>
                </li>
                <li>
                    <a href="trabalheconosco.php">Trabalhe Conosco</a>
                </li>
                <li>
                    <a href="sobre.php">Sobre</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
 <section>
    <div class="banner">
        <div class="conteudo">
            <span class="mini-titulo">
                DELIVERY • HOT-DOG ARTESANAL • SABOR DE VERDADE
            </span>
            <h1>DESDE 2021 SERVINDO SABOR,</h1>
            <h2>COM QUALIDADE EM CADA DETALHE.</h2>
            <a href="#" class="btn-banner">PEÇA AGORA</a>
        </div>
    </div>
</section>
    <section class="trajetoria">

    <h2>Nossa Trajetória</h2>

    <div class="timeline">

        <div class="item">
            <span class="ano">2021</span>

            <img src="Fotos/foto1.png" alt="casa">

            <h3>Tudo começou</h3>

            <p>
                Na pandemia, a família Reis transformou paixão e dedicação em uma pequena dogueria caseira, dando início a uma nova história.
            </p>
        </div>

        <div class="item">
            <span class="ano">2024</span>

            <img src="Fotos/foto2.png" alt="">

            <h3>1ª Loja Física</h3>

            <p>
               Conquistamos nosso primeiro espaço físico em uma praça de alimentação compartilhada, transformando cada pedido em um passo da nossa história.
            </p>
        </div>

        <div class="item">
            <span class="ano">2026</span>

            <img src="Fotos/foto3.png" alt="espaçonosso">

            <h3>Nosso Próprio Espaço</h3>

            <p>
                Com a confiança dos nossos clientes, conquistamos um espaço totalmente nosso, pensado para oferecer conforto, qualidade e momentos especiais em um ambiente aconchegante.
            </p>
        </div>

    </div>
</section>
<section class="cardapio">

    <div class="texto-cardapio">

        <span>NOSSO CARDÁPIO</span>

        <h2>
            SABOR QUE <br>
            MARCA MOMENTOS
        </h2>

        <p>
            Lanches preparados com ingredientes selecionados,
            muito sabor e aquele cuidado especial em cada pedido.
        </p>

        <a href="cardapio.php" class="btn-cardapio">
            VER CARDÁPIO COMPLETO
        </a>

    </div>

    <div class="card">
        <img src="Fotos/dogsimples.jpg" alt="DogSimples">

        <h3>Dog Simples</h3>

        <p>O sabor clássico que nunca sai de cena.</p>
    </div>

    <div class="card">
        <img src="Fotos/burger.jpg" alt="Burger">

        <h3>Dog Burger</h3>

        <p>Dois sabores reunidos em uma só experiência.</p>
    </div>

    <div class="card">
        <img src="Fotos/combo.jpg" alt="combo">

        <h3>Combo Dog Frango</h3>

        <p>Tudo que você precisa em um só lugar.</p>
    </div>

</section>
    </main>    
       <footer>
    <div class="itensfooter">

        <div class="item2">
            <i class="fa-solid fa-phone"></i>
            <div>
                <h4>Contato</h4>
                <p>(44)99168-8548</p>
                <p>prensadao.cm@hotmail.com</p>
                <p>@prensadao.cm</p>
            </div>
        </div>

        <div class="item2">
            <i class="fa-solid fa-location-dot"></i>
            <div>
                <h4>Endereço</h4>
                <p>Avenida Irmãos Pereira, 1960</p>
                <p>Centro - Campo Mourão/PR</p>
                <p>CEP: 87.300-010</p>
            </div>
        </div>

        <div class="item2">
            <i class="fa-regular fa-clock"></i>
            <div>
                <h4>Horário de Funcionamento</h4>
                <p>Ter a Qui: 18:45h às 23:00h</p>
                <p>Sex e Sáb: 18:45h às 23:30h</p>
                <p>Dom: 18:00h às 23:00h</p>
            </div>
        </div>
                <div class="item3">
            <p>
                    <?php
                         echo date ("Y");
                    ?>
                    Todos os direitos reservados - Desenvolvido por Camila Watanabe
                </p>
        </div>
    </div>

    </div>
</footer>
 <script src="Arquivo (4)/js/jquery-3.7.1.min.js"></script>
    <script>
        function menu() {
            $("#menu").toggle();
        }
    </script>


</body>