<?php
$titulo = 'Home';
include 'includes/header.php';
?>

<!-- BANNER HERO -->
<section class="banner-hero">
    <div class="banner-conteudo">
        <h1>Bem-vindo à Etec São Paulo</h1>
        <p>Escola Técnica Estadual referência em educação profissional no Estado de São Paulo. Transformando vidas através do conhecimento técnico.</p>
        <div class="banner-btns">
            <a href="/etec-site/pages/vestibulinho.php" class="btn-primary">
                <i class="fas fa-graduation-cap"></i> Inscreva-se no Vestibulinho
            </a>
            <a href="/etec-site/pages/cursos.php" class="btn-secondary">
                <i class="fas fa-book-open"></i> Conheça os Cursos
            </a>
        </div>
    </div>
</section>

<!-- CONTEÚDO PRINCIPAL -->
<div class="conteudo-principal">

    <!-- COLUNA PRINCIPAL -->
    <main>

        <!-- DESTAQUES / NOTÍCIAS -->
        <section class="secao">
            <div class="secao-titulo">
                <h2>Destaques</h2>
                <a href="/etec-site/pages/institucional.php" class="ver-mais">Ver mais <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="grid-noticias">

                <article class="card-noticia">
                    <div class="card-noticia-img-placeholder">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="card-noticia-body">
                        <p class="card-noticia-data"><i class="fas fa-calendar-alt"></i> 28 de março de 2026</p>
                        <span class="card-noticia-tag">Vestibulinho</span>
                        <h3>
                            <a href="/etec-site/pages/vestibulinho.php">Editais das vagas remanescentes dos cursos modulares de Administração e Guia de Turismo estão disponíveis</a>
                        </h3>
                    </div>
                </article>

                <article class="card-noticia">
                    <div class="card-noticia-img-placeholder">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="card-noticia-body">
                        <p class="card-noticia-data"><i class="fas fa-calendar-alt"></i> 20 de março de 2026</p>
                        <span class="card-noticia-tag">Eventos</span>
                        <h3>
                            <a href="/etec-site/pages/institucional.php">Fórum Tecnológico Interdisciplinar reúne alunos e profissionais da área de TI e Gestão</a>
                        </h3>
                    </div>
                </article>

                <article class="card-noticia">
                    <div class="card-noticia-img-placeholder">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="card-noticia-body">
                        <p class="card-noticia-data"><i class="fas fa-calendar-alt"></i> 10 de março de 2026</p>
                        <span class="card-noticia-tag">Institucional</span>
                        <h3>
                            <a href="/etec-site/pages/institucional.php">Planejamento Escolar 2026 marca início do ano letivo com imersão pedagógica de quatro dias</a>
                        </h3>
                    </div>
                </article>

                <article class="card-noticia">
                    <div class="card-noticia-img-placeholder">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-noticia-body">
                        <p class="card-noticia-data"><i class="fas fa-calendar-alt"></i> 05 de março de 2026</p>
                        <span class="card-noticia-tag">Estágio</span>
                        <h3>
                            <a href="/etec-site/pages/vestibulinho.php">Programa Aprendiz Paulista abre novas vagas para estudantes do ensino técnico integrado</a>
                        </h3>
                    </div>
                </article>

                <article class="card-noticia">
                    <div class="card-noticia-img-placeholder">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <div class="card-noticia-body">
                        <p class="card-noticia-data"><i class="fas fa-calendar-alt"></i> 28 de fevereiro de 2026</p>
                        <span class="card-noticia-tag">Acadêmico</span>
                        <h3>
                            <a href="/etec-site/pages/institucional.php">Biblioteca da ETESP recebe orientação de uso para calouros do primeiro semestre de 2026</a>
                        </h3>
                    </div>
                </article>

                <article class="card-noticia">
                    <div class="card-noticia-img-placeholder">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="card-noticia-body">
                        <p class="card-noticia-data"><i class="fas fa-calendar-alt"></i> 15 de fevereiro de 2026</p>
                        <span class="card-noticia-tag">Parceria</span>
                        <h3>
                            <a href="/etec-site/pages/institucional.php">Etec São Paulo firma parceria com empresas da região para ampliar oportunidades de estágio</a>
                        </h3>
                    </div>
                </article>

            </div>
        </section>

    </main>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <!-- Widget Vestibulinho -->
        <div class="widget-vestibulinho">
            <h3><i class="fas fa-graduation-cap"></i> Vestibulinho 2026</h3>
            <p>Inscrições abertas para o 2º semestre. Não perca o prazo!</p>
            <a href="/etec-site/pages/vestibulinho.php" class="btn-vest">Inscreva-se agora</a>
        </div>

        <!-- Widget Links Úteis -->
        <div class="widget">
            <div class="widget-header">Links Úteis</div>
            <div class="widget-body">
                <ul class="links-uteis">
                    <li><a href="https://www.sig.cps.sp.gov.br" target="_blank"><i class="fas fa-external-link-alt"></i> SIG – Sistema Integrado</a></li>
                    <li><a href="https://ava.cps.sp.gov.br" target="_blank"><i class="fas fa-laptop"></i> AVA – Ambiente Virtual</a></li>
                    <li><a href="https://www.vestibulinhoetec.com.br" target="_blank"><i class="fas fa-file-alt"></i> Vestibulinho Online</a></li>
                    <li><a href="#" target="_blank"><i class="fas fa-book"></i> Biblioteca Virtual</a></li>
                    <li><a href="mailto:etecsp@cps.sp.gov.br"><i class="fas fa-envelope"></i> E-mail Institucional</a></li>
                    <li><a href="https://www.cps.sp.gov.br" target="_blank"><i class="fas fa-university"></i> Centro Paula Souza</a></li>
                </ul>
            </div>
        </div>

        <!-- Widget Calendário -->
        <div class="widget">
            <div class="widget-header">Calendário Escolar</div>
            <div class="widget-body">
                <div class="calendario-info">
                    <p><i class="fas fa-calendar-check"></i> <strong>Início 1º sem:</strong> 10 de fevereiro de 2026</p>
                    <p><i class="fas fa-calendar-times"></i> <strong>Recesso:</strong> 20 a 24 de abril de 2026</p>
                    <p><i class="fas fa-calendar-check"></i> <strong>Início 2º sem:</strong> 28 de julho de 2026</p>
                    <p><i class="fas fa-calendar-minus"></i> <strong>Término do ano:</strong> 18 de dezembro de 2026</p>
                </div>
                <a href="/etec-site/pages/vestibulinho.php" class="btn-primary" style="margin-top:8px;font-size:0.8rem;padding:8px 14px;">
                    <i class="fas fa-download"></i> Baixar Calendário
                </a>
            </div>
        </div>

        <!-- Widget Contato Rápido -->
        <div class="widget">
            <div class="widget-header">Contato</div>
            <div class="widget-body">
                <div class="calendario-info">
                    <p><i class="fas fa-map-marker-alt"></i> Rua dos Andradas, 140 – Santa Ifigênia, São Paulo/SP</p>
                    <p><i class="fas fa-phone"></i> (11) 3209-0088</p>
                    <p><i class="fas fa-envelope"></i> etecsp@cps.sp.gov.br</p>
                    <p><i class="fas fa-clock"></i> Seg–Sex: 7h às 22h | Sáb: 7h às 17h</p>
                </div>
            </div>
        </div>

    </aside>

</div>

<!-- FAIXA DE CURSOS -->
<section class="faixa-cursos">
    <div class="container">
        <div class="secao-titulo">
            <h2>Nossos Cursos Técnicos</h2>
            <a href="/etec-site/pages/cursos.php" class="ver-mais">Ver todos <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="cursos-grid">

            <a href="/etec-site/pages/cursos.php?curso=administracao" class="curso-card">
                <div class="curso-icone"><i class="fas fa-briefcase"></i></div>
                <h3>Administração</h3>
                <p class="curso-modalidade">Técnico Modular</p>
            </a>

            <a href="/etec-site/pages/cursos.php?curso=desenvolvimento" class="curso-card">
                <div class="curso-icone"><i class="fas fa-code"></i></div>
                <h3>Desenvolvimento de Sistemas</h3>
                <p class="curso-modalidade">Técnico Modular</p>
            </a>

            <a href="/etec-site/pages/cursos.php?curso=edificacoes" class="curso-card">
                <div class="curso-icone"><i class="fas fa-hard-hat"></i></div>
                <h3>Edificações</h3>
                <p class="curso-modalidade">Técnico Modular</p>
            </a>

            <a href="/etec-site/pages/cursos.php?curso=eletroeletronica" class="curso-card">
                <div class="curso-icone"><i class="fas fa-bolt"></i></div>
                <h3>Eletroeletrônica</h3>
                <p class="curso-modalidade">Técnico Integrado</p>
            </a>

            <a href="/etec-site/pages/cursos.php?curso=eletronica" class="curso-card">
                <div class="curso-icone"><i class="fas fa-microchip"></i></div>
                <h3>Eletrônica</h3>
                <p class="curso-modalidade">Técnico Modular</p>
            </a>

            <a href="/etec-site/pages/cursos.php?curso=marketing" class="curso-card">
                <div class="curso-icone"><i class="fas fa-chart-line"></i></div>
                <h3>Marketing</h3>
                <p class="curso-modalidade">Técnico Modular</p>
            </a>

            <a href="/etec-site/pages/cursos.php?curso=rh" class="curso-card">
                <div class="curso-icone"><i class="fas fa-users"></i></div>
                <h3>Recursos Humanos</h3>
                <p class="curso-modalidade">Técnico Modular</p>
            </a>

            <a href="/etec-site/pages/cursos.php" class="curso-card" style="background:var(--azul-cps);color:#fff;border-color:var(--azul-cps);">
                <div class="curso-icone" style="background:var(--laranja-cps);"><i class="fas fa-th-list"></i></div>
                <h3 style="color:#fff;">Ver todos os cursos</h3>
                <p class="curso-modalidade" style="color:#aac4e6;">Acesse a lista completa</p>
            </a>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
