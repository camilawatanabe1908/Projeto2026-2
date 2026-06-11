<?php
$page = $_GET["page"] ?? "home";
$page = basename($page);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prensadão Dogueria</title>
    <base href="http://localhost:8080/Projeto2026-2/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php
        $cssFile = "css/{$page}.css";
        if (file_exists($cssFile)) {
            echo "<link rel='stylesheet' href='{$cssFile}'>";
        }
    ?>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg bg-black shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?page=home">
            <img src="Fotos/Vermelho-removebg-preview.png" alt="Logo">
        </a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=cardapio">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=trabalheconosco">Trabalhe Conosco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=sobre">Sobre</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="https://api.whatsapp.com/send/?phone=5544991688548&text&type=phone_number&app_absent=0"
                    target="_blank"
                    class="btn btn-primary">
                    Faça seu pedido
                </a>
            </div>
        </div>
    </div>
</nav>
<main class="p-0 m-0">
<?php
$arquivo = "paginas/{$page}.php";
if (file_exists($arquivo)) {
    include $arquivo;
} else {
    include "paginas/erro.php";
}
?>
</main>
<footer>
    <div class="itensfooter">

        <div class="item2">
            <i class="fa-solid fa-phone"></i>
            <div>
                <h4>Contato</h4>
                <p>(44) 99168-8548</p>
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
                <?php echo date("Y"); ?>
                Todos os direitos reservados - Desenvolvido por Camila Watanabe
            </p>
        </div>

    </div>
</footer>

</body>
</html>