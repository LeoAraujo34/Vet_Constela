<?php
$mensagem_valida = "Contato Enviado com Sucesso";
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.html");
    exit;
}
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $texto = $_POST['texto'] ?? '';

    if (empty($nome)){
        echo "Preencha o nome!";
    }elseif (empty($email)){
        echo "Preencha o e-mail!";
    }elseif (empty($tel)){
        echo "Preencha o telefone!";
    }elseif (empty($texto)){
        echo "Preencha a mensagem!";
    }else{
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicial.css"/>
    <title>Envia Contato</title>
</head>
<body>
      <div class="top_bar">
        <div class="img">
            <a href="index.html"><img class="dog" src="img/logo.png"/></a>
        </div>
        <div class="group_texts"></div>
        <div class="horario_atendimento">
            <p class="font_p">Horário de Atendimento</p>
            <p class="font_p">Seg. à Domingo das 6h às 23h</p>
        </div>
        <div class="contato">
            <p class="font_p">Envie Sua Mensagem:</p>
            <a class="number" href="https://api.whatsapp.com/send?phone=5511999998880">(11) 99999-8888</a>
        </div>
        <div class="contato">
            <p class="font_p">Fale Conosco:</p>
            <a class="number">(11)  2222-0000</a>
        </div>
    </div>
    <nav class="menu_navegacao">
        <div class="container">
        <ul class="menu_barra">
            <li class="option_menu"><a href="index.html">HOME</a></li>
            <li class="option_menu"><a href="sobre.html">SOBRE</a></li>
            <li class="option_menu"><a href="servicos.html">SERVIÇOS</a></li>
            <li class="option_menu"><a href="contato.html">CONTATO</a></li>
        </ul>
        </div>
    </nav>
    <section id="menu_background">
        <div class="container_menu">
            <div class="row_title">
                <h1 class="h1_row">Contato</h1>
            </div>
            <div class="row_body">
                <a class="a1_row" href="index.html">Inicio ></a>
                <a class="a2_row" href="contato.html">Contato</a>
            </div>
        </div>
    </section>
      <section id="menu_envia">
        <div class="container_envia">
            <div class="text_envia">
                <h2 style="text-align: center;"><?php echo $mensagem_valida?></h2>
            </div>
        </div>
    </section>
    <footer class="footer">
    <div class="container_footer">
        <div class="footer_info">
            <h2>CONSTELA PET</h2>
            <p>Cuidados veterinários com carinho, confiança e dedicação ao seu pet.</p>
        </div>
        <div class="footer_horario">
            <h3>Horário de Atendimento</h3>
            <p>Segunda a Domingo</p>
            <p>Das 6h às 23h</p>
        </div>
        <div class="footer_contato">
            <h3>Fale Conosco</h3>
            <p>(11) 2222-0000</p>
            <p>(11) 99999-8888</p>
        </div>
        <div class="footer_menu">
            <h3>Navegação</h3>
            <a href="index.html">Início</a>
            <a href="sobre.html">Sobre</a>
            <a href="servicos.html">Serviços</a>
            <a href="contato.html">Contato</a>
        </div>
    </div>
    <div class="footer_bottom">
        <p>© 2026 Constela Pet — Projeto desenvolvido para fins acadêmicos e de portfólio.</p>
    </div>
</footer>
</body>
</html>
