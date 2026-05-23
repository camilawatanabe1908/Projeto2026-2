<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Prensadão Dogueria</title>
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