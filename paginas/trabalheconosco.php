<?php include 'conexao.php'; ?>

<?php
$sucesso = isset($_GET['enviado']) && $_GET['enviado'] == '1';
$erro = '';

function validarCandidato($nome, $email, $telefone, $extensao) {
    $extensoes_permitidas = ['pdf', 'doc', 'docx'];

    if (empty($nome) || empty($email) || empty($telefone)) {
        return 'Preencha todos os campos obrigatórios.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'E-mail inválido.';
    }

    if (empty($extensoes_permitidas)) {
        return 'Nenhum formato de arquivo permitido configurado.';
    }

    if (!in_array($extensao, $extensoes_permitidas)) {
        return 'Apenas arquivos PDF, DOC ou DOCX são permitidos.';
    }

    return null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome     = trim($_POST['nome']);
    $email    = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);

    $curriculo_nome = '';
    $ext = '';

    if (isset($_FILES['curriculo']) && $_FILES['curriculo']['error'] === 0) {
        $ext = strtolower(pathinfo($_FILES['curriculo']['name'], PATHINFO_EXTENSION));
    } else {
        $erro = 'Por favor, anexe seu currículo.';
    }

    if (empty($erro)) {
        $erro = validarCandidato($nome, $email, $telefone, $ext);
    }

    if (empty($erro)) {
        $pasta = 'uploads/curriculos/';
        if (!is_dir($pasta)) {
            mkdir($pasta, 0755, true);
        }

        $curriculo_nome = uniqid('cv_') . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $_FILES['curriculo']['name']);
        $destino = $pasta . $curriculo_nome;

        if (!move_uploaded_file($_FILES['curriculo']['tmp_name'], $destino)) {
            $erro = 'Erro ao salvar o arquivo. Tente novamente.';
        }
    }

    if (empty($erro)) {
        $stmt = $conexao->prepare("INSERT INTO candidato (nome_candidato, email, telefone, curriculo, data_envio) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param('ssss', $nome, $email, $telefone, $curriculo_nome);

        if ($stmt->execute()) {
            header('Location: index.php?page=trabalheconosco&enviado=1');
            exit;
        } else {
            $erro = 'Erro ao salvar no banco de dados. Tente novamente.';
        }
        $stmt->close();
    }
}
?>

<main>
    <div class="bannertc">
        <div class="formulario">
            <h1>Trabalhe Conosco</h1>
            <p>Quer fazer parte da nossa equipe?<br>Preencha o formulário abaixo e envie seu currículo.</p>

            <?php if ($sucesso): ?>
                <div class="tc-sucesso">
                    ✅ Currículo enviado com sucesso! Entraremos em contato em breve.
                </div>
            <?php endif; ?>

            <?php if ($erro): ?>
                <div class="tc-erro">
                    ⚠️ <?php echo $erro; ?>
                </div>
            <?php endif; ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text"  name="nome"     placeholder="Nome completo" required value="<?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?>">
                <input type="email" name="email"    placeholder="E-mail"        required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                <input type="text"  name="telefone" placeholder="Telefone"      required value="<?php echo isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : ''; ?>"><br>
                <label><strong>Envie seu currículo:</strong></label>
                <input type="file" name="curriculo" accept=".pdf,.doc,.docx" required>
                <button type="submit">Enviar Currículo</button>
            </form>

        </div>
    </div>
</main>