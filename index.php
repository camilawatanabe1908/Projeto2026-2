<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prensadão Dogueria</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
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
        <div class="banner">
            <div class="conteudo">
                <h1>O MELHOR HOT-DOG DA CIDADE,</h1>
                <h2>NO CONFORTO DO SEU SOFÁ.</h2>
                <h3>Escolha sua plataforma favorita e peça agora.</h3>

                <div class="botoes">
                    <a href="https://www.ifood.com.br/delivery/campo-mourao-pr/prensadao-delivery-centro/d9af5117-1717-4cc8-957a-55be7fac2afe?UTM_Medium=share"
                        target="_blank" class="btn ifood"><img src="Fotos/ifood.png" alt="ifood" class="ifoodimg"></a>
                    <a href="https://aiqfome.com/PR/campo-mourao/prensadao-delivery" target="_blank"
                        class="btn aiqfome"><img src="Fotos/aiq.png" alt="aiqfome" class="aiqimg"></a>
                    <a href="https://wa.me/5544991688548" target="_blank" class="btn whatsapp"><img
                            src="Fotos/whats.png" alt="whatsapp" class="whatsimg">WhatsApp</a>
                </div>
            </div>
        </div>
            <section class="diferenciais">
                <div class="item">
                    <img src="Fotos/hotd.png" alt="hotdog">
                    <div>
                        <h3>Ingredentes Selecionados</h3>
                        <p>Receita artesanal com ingredientes selecionados.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Fotos/foguete.png" alt="foguete">
                    <div>
                        <h3>Entrega <br>Rápida</h3>
                        <p>Seu pedido chega quentinho, com rapidez e eficiência.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="Fotos/bisnaga.png" alt="bisnaga">
                    <div>
                        <h3>Molho Verde Especial</h3>
                        <p>Um sabor único que só a nossa casa tem.</p>
                    </div>
                </div>
        </section>
    </main>
    <section class="banner2">
        <div class="conteudo2">
                <h1>Mas aqui a história não acaba no hot…</h1>
                <h2>o hambúrguer é o próximo capítulo.</h2>
        </div>
    </section>

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
</footer>
 <script src="Arquivo (4)/js/jquery-3.7.1.min.js"></script>
    <script>
        function menu() {
            $("#menu").toggle();
        }
    </script>

</body>

</html>