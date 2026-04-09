<?php
$titulo = 'Cursos Técnicos';
include '../includes/header.php';

// Dados dos cursos
$cursos = [
    'administracao' => [
        'nome'      => 'Técnico em Administração',
        'icone'     => 'fas fa-briefcase',
        'duracao'   => '2 anos (4 módulos)',
        'periodo'   => 'Manhã / Tarde / Noite',
        'vagas'     => 40,
        'desc'      => 'Forma profissionais capazes de planejar, organizar, dirigir e controlar os recursos de uma empresa, atuando em diversas áreas como finanças, marketing, recursos humanos e logística.',
    ],
    'desenvolvimento' => [
        'nome'      => 'Técnico em Desenvolvimento de Sistemas',
        'icone'     => 'fas fa-code',
        'duracao'   => '2 anos (4 módulos)',
        'periodo'   => 'Manhã / Noite',
        'vagas'     => 40,
        'desc'      => 'Habilita o aluno a desenvolver sistemas computacionais utilizando linguagens de programação, banco de dados e metodologias de desenvolvimento de software.',
    ],
    'edificacoes' => [
        'nome'      => 'Técnico em Edificações',
        'icone'     => 'fas fa-hard-hat',
        'duracao'   => '2 anos (4 módulos)',
        'periodo'   => 'Manhã / Tarde',
        'vagas'     => 35,
        'desc'      => 'Capacita para elaborar projetos, planejar e supervisionar obras civis, aplicando normas técnicas da construção civil.',
    ],
    'eletroeletronica' => [
        'nome'      => 'Técnico em Eletroeletrônica',
        'icone'     => 'fas fa-bolt',
        'duracao'   => '3 anos (Integrado ao EM)',
        'periodo'   => 'Integral',
        'vagas'     => 35,
        'desc'      => 'Integrado ao Ensino Médio, forma técnicos para instalar, operar e manter sistemas elétricos e eletrônicos industriais e prediais.',
    ],
    'eletronica' => [
        'nome'      => 'Técnico em Eletrônica',
        'icone'     => 'fas fa-microchip',
        'duracao'   => '2 anos (4 módulos)',
        'periodo'   => 'Manhã / Noite',
        'vagas'     => 40,
        'desc'      => 'Forma profissionais para projetar, montar, testar e manter equipamentos e sistemas eletrônicos analógicos e digitais.',
    ],
    'marketing' => [
        'nome'      => 'Técnico em Marketing',
        'icone'     => 'fas fa-chart-line',
        'duracao'   => '2 anos (4 módulos)',
        'periodo'   => 'Manhã / Tarde / Noite',
        'vagas'     => 40,
        'desc'      => 'Prepara o aluno para atuar em estratégias de mercado, análise de consumidores, comunicação empresarial e marketing digital.',
    ],
    'rh' => [
        'nome'      => 'Técnico em Recursos Humanos',
        'icone'     => 'fas fa-users',
        'duracao'   => '2 anos (4 módulos)',
        'periodo'   => 'Manhã / Tarde / Noite',
        'vagas'     => 40,
        'desc'      => 'Habilita para recrutamento e seleção, treinamento, folha de pagamento e relações trabalhistas dentro de organizações.',
    ],
];

$cursoSelecionado = isset($_GET['curso']) && array_key_exists($_GET['curso'], $cursos) ? $_GET['curso'] : null;
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <div class="container">
        <a href="/index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Cursos Técnicos</span>
        <?php if ($cursoSelecionado): ?>
            <i class="fas fa-chevron-right"></i>
            <span><?= htmlspecialchars($cursos[$cursoSelecionado]['nome']) ?></span>
        <?php endif; ?>
    </div>
</div>

<div class="pagina-interna">
    <main class="pagina-conteudo">

        <?php if ($cursoSelecionado): 
            $c = $cursos[$cursoSelecionado];
        ?>

            <h1><i class="<?= $c['icone'] ?>" style="color:var(--laranja-cps);margin-right:10px;"></i><?= $c['nome'] ?></h1>

            <div class="aviso">
                <i class="fas fa-info-circle"></i>
                Inscrições para o 2º semestre de 2026 abertas no site <strong>vestibulinhoetec.com.br</strong>
            </div>

            <p><?= $c['desc'] ?></p>

            <h2>Informações do Curso</h2>
            <table class="tabela-etec">
                <tr><th>Item</th><th>Detalhes</th></tr>
                <tr><td>Duração</td><td><?= $c['duracao'] ?></td></tr>
                <tr><td>Período</td><td><?= $c['periodo'] ?></td></tr>
                <tr><td>Vagas por classe</td><td><?= $c['vagas'] ?></td></tr>
                <tr><td>Modalidade</td><td>Presencial</td></tr>
                <tr><td>Certificação</td><td>Diploma de Técnico expedido pelo Centro Paula Souza</td></tr>
            </table>

            <h2>Campo de Atuação</h2>
            <p>O profissional formado poderá atuar em empresas privadas, órgãos públicos, micro e pequenas empresas, cooperativas, ONGs e na abertura do próprio negócio.</p>

            <h2>Matriz Curricular</h2>
            <p>A matriz curricular é organizada em módulos semestrais, conforme o Plano de Curso aprovado pelo Centro Paula Souza. Para mais detalhes, acesse o site oficial do CPS ou consulte a Secretaria Acadêmica.</p>

            <div style="margin-top:24px;">
                <a href="/pages/vestibulinho.php" class="btn-primary">
                    <i class="fas fa-graduation-cap"></i> Inscrever-se no Vestibulinho
                </a>
                &nbsp;
                <a href="/pages/cursos.php" class="btn-secondary" style="border-color:var(--azul-cps);color:var(--azul-cps);">
                    <i class="fas fa-arrow-left"></i> Voltar aos Cursos
                </a>
            </div>

        <?php else: ?>

            <h1>Cursos Técnicos</h1>
            <p>A Etec São Paulo oferece cursos técnicos de qualidade, reconhecidos pelo mercado de trabalho. Escolha o curso ideal para a sua carreira:</p>

            <div class="cursos-grid" style="margin-top:24px;">
                <?php foreach ($cursos as $slug => $c): ?>
                    <a href="/pages/cursos.php?curso=<?= $slug ?>" class="curso-card">
                        <div class="curso-icone"><i class="<?= $c['icone'] ?>"></i></div>
                        <h3><?= $c['nome'] ?></h3>
                        <p class="curso-modalidade"><?= $c['duracao'] ?></p>
                    </a>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>

    </main>

    <aside class="sidebar">
        <div class="widget">
            <div class="widget-header">Todos os Cursos</div>
            <div class="widget-body">
                <ul class="links-uteis">
                    <?php foreach ($cursos as $slug => $c): ?>
                        <li>
                            <a href="/pages/cursos.php?curso=<?= $slug ?>"
                               <?= $cursoSelecionado === $slug ? 'style="color:var(--laranja-cps);font-weight:700;"' : '' ?>>
                                <i class="<?= $c['icone'] ?>"></i>
                                <?= str_replace('Técnico em ', '', $c['nome']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="widget-vestibulinho">
            <h3><i class="fas fa-graduation-cap"></i> Vestibulinho 2026</h3>
            <p>Garanta sua vaga nos cursos técnicos da Etec!</p>
            <a href="/pages/vestibulinho.php" class="btn-vest">Inscrever-se</a>
        </div>
    </aside>
</div>

<?php include '../includes/footer.php'; ?>
