<?php include 'conexao.php'; ?>

<?php
function consultarTaxa($bairro) {
    $bairro = trim($bairro);

    $taxas = [
        'Vila Guarujá'                                    => ['taxa' => 13, 'cor' => '#a10100'],
        'Vila Rural'                                      => ['taxa' => 13, 'cor' => '#a10100'],
        'Centro'                                          => ['taxa' => 6, 'cor' => '#a10100'],
        'Conjunto Habitacional Antilhas'                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Habitacional Milton Luiz Pereira'       => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Habitacional Montes Claros'             => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Habitacional Mundo Novo'                => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Habitacional Piacentini'                => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Habitacional Primavera'                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Habitacional São Francisco de Assis'    => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Residencial Ilha Bela'                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Albuquerque'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Alcantara'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Alvorada'                                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Ana Eliza'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Ana Elisa'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Araucária'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Aurora'                                   => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Bandeirantes'                             => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Botânico I'                               => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Botânico II'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Brasília'                                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Capricórnio'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Casali'                                   => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Cidade Alta'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Cidade Alta II'                           => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Cidade Nova'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Cidade Verde'                             => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Conrado'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Constantino'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Copacabana'                               => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Copacabana II'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Copacabana III'                           => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Country Club'                             => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Curitiba'                                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Fernando'                                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Flor de Lis I'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Flor de Lis II'                           => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Flor do Campo'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Flora'                                    => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Flora II'                                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Flórida'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Francisco Ferreira Albuquerque'           => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Gutierrez'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Horizonte'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Ione'                                     => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Ipanema'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Ipê'                                      => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Isabel'                                   => ['taxa' => 7, 'cor' => '#a10100'],
        "Jardim Joana D'Arc"                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim John Kennedy'                             => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Kimberlim'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Lar Paraná'                               => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Laura'                                    => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Lopes'                                    => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Lourdes'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Maia'                                     => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Maria Barleta'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Maria Clara'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Marino Emer'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Novo Centro'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Orly'                                     => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Paraíso do Campo'                         => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Paulino'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Paulista'                                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Pio XII'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Residencial do Lago'                      => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim San Marino'                               => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Santa Nilce I'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Santa Nilce II'                           => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim São Pedro'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim São Sebastião'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Shangrilá'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Shangrilá II'                             => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Tomasi'                                   => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Topázio'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Três Marias'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Urupês'                                   => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Veneza'                                   => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Villaggio Trombini'                       => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Vitória'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Vitória Régia'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Voidelo'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Zoraide'                                  => ['taxa' => 7, 'cor' => '#a10100'],
        'Moradias Verdes Campos'                          => ['taxa' => 7, 'cor' => '#a10100'],
        'Parque das Acácias'                              => ['taxa' => 7, 'cor' => '#a10100'],
        'Residencial Arnaldo Walter Bronzel'              => ['taxa' => 7, 'cor' => '#a10100'],
        'Residencial Campelle'                            => ['taxa' => 7, 'cor' => '#a10100'],
        'Residencial Isabela'                             => ['taxa' => 7, 'cor' => '#a10100'],
        'Santa Casa'                                      => ['taxa' => 7, 'cor' => '#a10100'],
        'Vila Cândida'                                    => ['taxa' => 7, 'cor' => '#a10100'],
        'Vila Corinthians'                                => ['taxa' => 7, 'cor' => '#a10100'],
        'Vila Nova'                                       => ['taxa' => 7, 'cor' => '#a10100'],
        'Vila Rio Grande'                                 => ['taxa' => 7, 'cor' => '#a10100'],
        'Vila Teixeira'                                   => ['taxa' => 7, 'cor' => '#a10100'],
        'Conjunto Habitacional Parigot de Souza'          => ['taxa' => 7, 'cor' => '#a10100'],
        'Jardim Sol Nascente'                             => ['taxa' => 7, 'cor' => '#a10100'],
        'UTFPR'                                           => ['taxa' => 7, 'cor' => '#a10100'],
        'Jd Panambi'                                      => ['taxa' => 7, 'cor' => '#a10100'],
        'Residencial Parque do Lago'                      => ['taxa' => 7, 'cor' => '#a10100'],
        'Campus Integrado'                                => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Europa II'                                => ['taxa' => 8, 'cor' => '#a10100'],
        'Conjunto Habitacional Governador José Richa'     => ['taxa' => 8, 'cor' => '#a10100'],
        'Conjunto Habitacional Milton de Paula Walter'    => ['taxa' => 8, 'cor' => '#a10100'],
        'Conjunto Habitacional Mário Figueiredo'          => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Aeroporto'                                => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim América'                                  => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Batel'                                    => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Batel II'                                 => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Nossa Senhora Aparecida'                  => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Santa Cruz'                               => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Tropical I'                               => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Tropical II'                              => ['taxa' => 8, 'cor' => '#a10100'],
        'Moradias Avelino Piacentini'                     => ['taxa' => 8, 'cor' => '#a10100'],
        'Moradias Condor'                                 => ['taxa' => 8, 'cor' => '#a10100'],
        'Residencial Diamante Azul'                       => ['taxa' => 8, 'cor' => '#a10100'],
        'Residencial Fortunato Perdoncini'                => ['taxa' => 8, 'cor' => '#a10100'],
        'Parque Industrial I'                             => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Silvana'                                  => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Santa Rosa'                               => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Modelo'                                   => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Europa'                                   => ['taxa' => 8, 'cor' => '#a10100'],
        'Jardim Esperança'                                => ['taxa' => 8, 'cor' => '#a10100'],
        'Conjunto Habitacional Mendes'                    => ['taxa' => 8, 'cor' => '#a10100'],
    ];

    foreach ($taxas as $nome => $dados) {
        if (mb_strtolower($nome) === mb_strtolower($bairro)) {
            return $dados;
        }
    }

    return null;
}

$resultado_taxa = null;
$bairro_digitado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['bairro'])) {
    $bairro_digitado = $_POST['bairro'];
    $resultado_taxa = consultarTaxa($bairro_digitado);
}

$sql_categorias = "SELECT id, nome_categoria FROM categoria ORDER BY id";
$resultado_categorias = mysqli_query($conexao, $sql_categorias);
$categorias = mysqli_fetch_all($resultado_categorias, MYSQLI_ASSOC);

$sql_produtos = "SELECT p.id, p.nome_produto, p.descricao, p.imagem, p.imagem_combo, p.combo_descricao, pc.id_categoria
                 FROM produto p
                 INNER JOIN produto_categoria pc ON p.id = pc.id_produto
                 ORDER BY p.id";
$resultado_produtos = mysqli_query($conexao, $sql_produtos);

$produtos = [];
while ($row = mysqli_fetch_assoc($resultado_produtos)) {
    $id = $row['id'];
    if (!isset($produtos[$id])) {
        $produtos[$id] = [
            'id'              => $row['id'],
            'nome_produto'    => $row['nome_produto'],
            'descricao'       => $row['descricao'],
            'imagem'          => $row['imagem'],
            'imagem_combo'    => $row['imagem_combo'],
            'combo_descricao' => $row['combo_descricao'],
            'categorias'      => []
        ];
    }
    $produtos[$id]['categorias'][] = $row['id_categoria'];
}
?>

<div style="width:100%; height:500px; overflow:hidden; border-top: 1px solid white;">
    <video autoplay muted loop playsinline style="width:100vw; height:100vh; object-fit:cover; display:block;">
        <source src="Fotos/video.mp4" type="video/mp4">
    </video>
</div>

<main class="cardapio-container">

    <div class="filtros">
        <button class="btn-filtro ativo" onclick="filtrar(this, 'todos')">Todos</button>
        <?php foreach ($categorias as $cat): ?>
            <button class="btn-filtro" onclick="filtrar(this, '<?php echo $cat['id']; ?>')">
                <?php echo $cat['nome_categoria']; ?>
            </button>
        <?php endforeach; ?>
    </div>

    <div class="produtos-grid">
        <?php foreach ($produtos as $produto): ?>
        <div class="produto-card" data-categorias="<?php echo implode(',', $produto['categorias']); ?>">

            <?php if (!empty($produto['imagem_combo'])): ?>
            <div class="abas">
                <div class="aba ativa" onclick="trocarAba(this, 'lanche')">Lanche</div>
                <div class="aba" onclick="trocarAba(this, 'combo')">Combo</div>
            </div>
            <?php endif; ?>

            <div class="aba-img">
                <img class="img-lanche" src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome_produto']; ?>">
                <?php if (!empty($produto['imagem_combo'])): ?>
                <img class="img-combo" src="<?php echo $produto['imagem_combo']; ?>" alt="Combo <?php echo $produto['nome_produto']; ?>" style="display:none;">
                <?php endif; ?>
            </div>

            <div class="produto-info">
                <h3><?php echo $produto['nome_produto']; ?></h3>
                <p class="desc-lanche"><?php echo $produto['descricao']; ?></p>
                <?php if (!empty($produto['imagem_combo'])): ?>
                <p class="desc-combo" style="display:none;">
                    <?php echo $produto['descricao']; ?>
                    <br><br>
                    <span class="combo-extra"><?php echo $produto['combo_descricao']; ?></span>
                </p>
                <?php endif; ?>
            </div>

        </div>
        <?php endforeach; ?>
    </div>

</main>
<section class="taxa-container" id="taxa-entrega">

    <div class="taxa-divider">
        <div class="taxa-divider-line"></div>
        <h2 class="taxa-titulo">Taxa de <span>entrega</span></h2>
        <div class="taxa-divider-line"></div>
    </div>

    <form method="POST" class="taxa-form">
        <input
            type="text"
            name="bairro"
            placeholder="Digite seu bairro..."
            value="<?php echo htmlspecialchars($bairro_digitado); ?>"
            class="taxa-input"
            list="lista-bairros"
        >
        <datalist id="lista-bairros">
    <option value="Vila Guarujá">
    <option value="Vila Rural">
    <option value="Centro">
    <option value="Conjunto Habitacional Antilhas">
    <option value="Conjunto Habitacional Milton Luiz Pereira">
    <option value="Conjunto Habitacional Montes Claros">
    <option value="Conjunto Habitacional Mundo Novo">
    <option value="Conjunto Habitacional Piacentini">
    <option value="Conjunto Habitacional Primavera">
    <option value="Conjunto Habitacional São Francisco de Assis">
    <option value="Conjunto Residencial Ilha Bela">
    <option value="Jardim Albuquerque">
    <option value="Jardim Alcantara">
    <option value="Jardim Alvorada">
    <option value="Jardim Ana Eliza">
    <option value="Jardim Araucária">
    <option value="Jardim Aurora">
    <option value="Jardim Bandeirantes">
    <option value="Jardim Botânico I">
    <option value="Jardim Botânico II">
    <option value="Jardim Brasília">
    <option value="Jardim Capricórnio">
    <option value="Jardim Casali">
    <option value="Jardim Cidade Alta">
    <option value="Jardim Cidade Alta II">
    <option value="Jardim Cidade Nova">
    <option value="Jardim Cidade Verde">
    <option value="Jardim Conrado">
    <option value="Jardim Constantino">
    <option value="Jardim Copacabana">
    <option value="Jardim Copacabana II">
    <option value="Jardim Copacabana III">
    <option value="Jardim Country Club">
    <option value="Jardim Curitiba">
    <option value="Jardim Fernando">
    <option value="Jardim Flor de Lis I">
    <option value="Jardim Flor de Lis II">
    <option value="Jardim Flor do Campo">
    <option value="Jardim Flora">
    <option value="Jardim Flora II">
    <option value="Jardim Flórida">
    <option value="Jardim Francisco Ferreira Albuquerque">
    <option value="Jardim Gutierrez">
    <option value="Jardim Horizonte">
    <option value="Jardim Ione">
    <option value="Jardim Ipanema">
    <option value="Jardim Ipê">
    <option value="Jardim Isabel">
    <option value="Jardim Joana D'Arc">
    <option value="Jardim John Kennedy">
    <option value="Jardim Kimberlim">
    <option value="Jardim Lar Paraná">
    <option value="Jardim Laura">
    <option value="Jardim Lopes">
    <option value="Jardim Lourdes">
    <option value="Jardim Maia">
    <option value="Jardim Maria Barleta">
    <option value="Jardim Maria Clara">
    <option value="Jardim Marino Emer">
    <option value="Jardim Novo Centro">
    <option value="Jardim Orly">
    <option value="Jardim Paraíso do Campo">
    <option value="Jardim Paulino">
    <option value="Jardim Paulista">
    <option value="Jardim Pio XII">
    <option value="Jardim Residencial do Lago">
    <option value="Jardim San Marino">
    <option value="Jardim Santa Nilce I">
    <option value="Jardim Santa Nilce II">
    <option value="Jardim São Pedro">
    <option value="Jardim São Sebastião">
    <option value="Jardim Shangrilá">
    <option value="Jardim Shangrilá II">
    <option value="Jardim Tomasi">
    <option value="Jardim Topázio">
    <option value="Jardim Três Marias">
    <option value="Jardim Urupês">
    <option value="Jardim Veneza">
    <option value="Jardim Villaggio Trombini">
    <option value="Jardim Vitória">
    <option value="Jardim Vitória Régia">
    <option value="Jardim Voidelo">
    <option value="Jardim Zoraide">
    <option value="Moradias Verdes Campos">
    <option value="Parque das Acácias">
    <option value="Residencial Arnaldo Walter Bronzel">
    <option value="Residencial Campelle">
    <option value="Residencial Isabela">
    <option value="Santa Casa">
    <option value="Vila Cândida">
    <option value="Vila Corinthians">
    <option value="Vila Nova">
    <option value="Vila Rio Grande">
    <option value="Vila Teixeira">
    <option value="Conjunto Habitacional Parigot de Souza">
    <option value="Jardim Sol Nascente">
    <option value="UTFPR">
    <option value="Jd Panambi">
    <option value="Residencial Parque do Lago">
    <option value="Campus Integrado">
    <option value="Jardim Europa II">
    <option value="Conjunto Habitacional Governador José Richa">
    <option value="Conjunto Habitacional Milton de Paula Walter">
    <option value="Conjunto Habitacional Mário Figueiredo">
    <option value="Jardim Aeroporto">
    <option value="Jardim América">
    <option value="Jardim Batel">
    <option value="Jardim Batel II">
    <option value="Jardim Nossa Senhora Aparecida">
    <option value="Jardim Santa Cruz">
    <option value="Jardim Tropical I">
    <option value="Jardim Tropical II">
    <option value="Moradias Avelino Piacentini">
    <option value="Moradias Condor">
    <option value="Residencial Diamante Azul">
    <option value="Residencial Fortunato Perdoncini">
    <option value="Parque Industrial I">
    <option value="Jardim Silvana">
    <option value="Jardim Santa Rosa">
    <option value="Jardim Modelo">
    <option value="Jardim Europa">
    <option value="Jardim Esperança">
    <option value="Conjunto Habitacional Mendes">
        </datalist>
        <button type="submit" class="taxa-btn">Consultar</button>
    </form>

    <?php if ($resultado_taxa !== null): ?>
        <div class="taxa-resultado">
            <div>
                <p class="taxa-bairro"><?php echo htmlspecialchars($bairro_digitado); ?></p>
                <p class="taxa-valor" style="color: <?php echo $resultado_taxa['cor']; ?>">
                    R$ <?php echo number_format($resultado_taxa['taxa'], 2, ',', '.'); ?>
                </p>
            </div>
            <a href="https://api.whatsapp.com/send/?phone=5544991688548&text=Olá!+Gostaria+de+fazer+um+pedido+para+o+bairro+<?php echo urlencode($bairro_digitado); ?>"
               target="_blank" class="taxa-whats">
                <i class="fa-brands fa-whatsapp"></i> Fazer pedido
            </a>
        </div>
    <?php elseif ($bairro_digitado !== ''): ?>
        <div class="taxa-resultado taxa-nao-encontrado">
            <p>Bairro não encontrado na nossa lista.</p>
            <p>Entre em contato pelo WhatsApp para consultar!</p>
            <a href="https://api.whatsapp.com/send/?phone=5544991688548&text=Olá!+Gostaria+de+saber+a+taxa+de+entrega+para+o+bairro+<?php echo urlencode($bairro_digitado); ?>"
               target="_blank" class="taxa-whats">
                <i class="fa-brands fa-whatsapp"></i> Consultar pelo WhatsApp
            </a>
        </div>
    <?php endif; ?>

</section>
<script>
function filtrar(botao, categoriaId) {
    document.querySelectorAll('.btn-filtro').forEach(b => b.classList.remove('ativo'));
    botao.classList.add('ativo');

    document.querySelectorAll('.produto-card').forEach(card => {
        const cats = card.dataset.categorias.split(',');
        if (categoriaId === 'todos' || cats.includes(categoriaId)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function trocarAba(abaClicada, tipo) {
    const card = abaClicada.closest('.produto-card');
    const abas = card.querySelectorAll('.aba');
    const imgLanche = card.querySelector('.img-lanche');
    const imgCombo = card.querySelector('.img-combo');
    const descLanche = card.querySelector('.desc-lanche');
    const descCombo = card.querySelector('.desc-combo');

    abas.forEach(a => a.classList.remove('ativa'));
    abaClicada.classList.add('ativa');

    if (tipo === 'lanche') {
        imgLanche.style.display = 'block';
        imgCombo.style.display = 'none';
        descLanche.style.display = 'block';
        descCombo.style.display = 'none';
    } else {
        imgLanche.style.display = 'none';
        imgCombo.style.display = 'block';
        descLanche.style.display = 'none';
        descCombo.style.display = 'block';
    }
}
</script>
</script>

<?php if ($bairro_digitado !== ''): ?>
<script>
window.onload = function() {
    document.getElementById('taxa-entrega')
        .scrollIntoView({ behavior: 'smooth' });
};
</script>
<?php endif; ?>