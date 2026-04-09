<?php
$pagina_atual = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo . ' – Etec São Paulo' : 'Etec São Paulo – Centro Paula Souza'; ?></title>
    <link rel="stylesheet" href="/etec-site/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- BARRA DO GOVERNO -->
<div class="barra-governo">
    <div class="container-governo">
        <div class="gov-left">
            <img src="https://etecsp.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/logo-governo-do-estado-sp.png"
                 alt="Governo do Estado de São Paulo" class="logo-gov">
            <span class="separador">|</span>
            <a href="https://spmaisdigital.sp.gov.br" target="_blank">SP + Digital</a>
        </div>
        <div class="gov-right">
            <div class="acessibilidade">
                <a href="#" onclick="mudaFonte(1)" title="Aumentar fonte">A+</a>
                <a href="#" onclick="mudaFonte(-1)" title="Diminuir fonte">A-</a>
                <a href="#" onclick="toggleContraste()" title="Alto contraste">&#9680;</a>
            </div>
            <div class="redes-governo">
                <a href="https://www.facebook.com/governosp" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/governosp" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/governosp" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.twitter.com/governosp" target="_blank"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- HEADER PRINCIPAL -->
<header class="header-principal">
    <div class="container-header">
        <div class="logo-area">
            <a href="/etec-site/index.php">
                <div class="logo-texto">
                    <span class="logo-etec">Etec</span>
                    <span class="logo-nome">São Paulo</span>
                </div>
                <div class="logo-sub">Centro Paula Souza</div>
            </a>
        </div>
        <div class="header-info">
            <div class="contato-rapido">
                <span><i class="fas fa-phone"></i> (11) 3209-0088</span>
                <span><i class="fas fa-envelope"></i> etecsp@cps.sp.gov.br</span>
            </div>
        </div>
        <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- NAVEGAÇÃO PRINCIPAL -->
<nav class="nav-principal" id="navPrincipal">
    <div class="container-nav">
        <ul class="menu-principal">
            <li class="<?php echo $pagina_atual == 'index' ? 'ativo' : ''; ?>">
                <a href="/etec-site/index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="tem-sub <?php echo $pagina_atual == 'institucional' ? 'ativo' : ''; ?>">
                <a href="#">Institucional <i class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="/etec-site/pages/institucional.php">A Escola</a></li>
                    <li><a href="/etec-site/pages/institucional.php">Missão, Visão e Valores</a></li>
                    <li><a href="/etec-site/pages/institucional.php">Equipe de Direção</a></li>
                    <li><a href="/etec-site/pages/institucional.php">Projeto Político Pedagógico</a></li>
                    <li><a href="/etec-site/pages/institucional.php">Regimento Comum</a></li>
                </ul>
            </li>
            <li class="tem-sub <?php echo $pagina_atual == 'cursos' ? 'ativo' : ''; ?>">
                <a href="#">Cursos <i class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="/etec-site/pages/cursos.php?curso=administracao">Administração</a></li>
                    <li><a href="/etec-site/pages/cursos.php?curso=desenvolvimento">Desenvolvimento de Sistemas</a></li>
                    <li><a href="/etec-site/pages/cursos.php?curso=edificacoes">Edificações</a></li>
                    <li><a href="/etec-site/pages/cursos.php?curso=eletroeletronica">Eletroeletrônica</a></li>
                    <li><a href="/etec-site/pages/cursos.php?curso=eletronica">Eletrônica</a></li>
                    <li><a href="/etec-site/pages/cursos.php?curso=marketing">Marketing</a></li>
                    <li><a href="/etec-site/pages/cursos.php?curso=rh">Recursos Humanos</a></li>
                </ul>
            </li>
            <li class="tem-sub">
                <a href="#">Secretaria Acadêmica <i class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="/etec-site/pages/contato.php">Contato</a></li>
                    <li><a href="/etec-site/pages/vestibulinho.php">Calendário Escolar</a></li>
                    <li><a href="/etec-site/pages/institucional.php">NSA</a></li>
                </ul>
            </li>
            <li class="tem-sub">
                <a href="#">Estágio <i class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li><a href="/etec-site/pages/vestibulinho.php">Vagas de Estágio</a></li>
                    <li><a href="/etec-site/pages/vestibulinho.php">Orientações</a></li>
                    <li><a href="/etec-site/pages/vestibulinho.php">Documentos</a></li>
                </ul>
            </li>
            <li class="<?php echo $pagina_atual == 'contato' ? 'ativo' : ''; ?>">
                <a href="/etec-site/pages/contato.php">Fale Conosco</a>
            </li>
            <li>
                <a href="/etec-site/pages/vestibulinho.php" class="btn-vestibulinho">
                    <i class="fas fa-graduation-cap"></i> Vestibulinho
                </a>
            </li>
        </ul>
    </div>
</nav>