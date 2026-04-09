<?php
$titulo = 'Institucional';
include '../includes/header.php';
?>

<div class="breadcrumb">
    <div class="container">
        <a href="/index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Institucional</span>
    </div>
</div>

<div class="pagina-interna">
    <main class="pagina-conteudo">

        <h1>ETESP – Escola Técnica Estadual de São Paulo</h1>

        <p>A Escola Técnica Estadual de São Paulo (ETESP) é uma unidade do <strong>Centro Paula Souza</strong>, autarquia do Governo do Estado de São Paulo. Fundada há mais de 24 anos, a escola é referência em educação técnica profissional na capital paulista.</p>

        <p>Localizada no centro histórico de São Paulo, próxima ao Metrô Luz, a ETESP oferece cursos técnicos modulares e integrados ao ensino médio, atendendo mais de 4.200 alunos por semestre em turmas nos períodos da manhã, tarde e noite.</p>

        <h2>Missão</h2>
        <p>Promover educação técnica e tecnológica de excelência, contribuindo para o desenvolvimento econômico e social do Estado de São Paulo, por meio da formação integral do cidadão e do profissional.</p>

        <h2>Visão</h2>
        <p>Ser reconhecida como instituição de referência em educação profissional e tecnológica, destacando-se pela qualidade do ensino, pela inovação pedagógica e pela inserção dos egressos no mercado de trabalho.</p>

        <h2>Valores</h2>
        <table class="tabela-etec">
            <tr><td><strong>Excelência</strong></td><td>Compromisso com a qualidade em todos os processos educacionais</td></tr>
            <tr><td><strong>Ética</strong></td><td>Transparência e integridade nas relações institucionais</td></tr>
            <tr><td><strong>Inclusão</strong></td><td>Educação acessível e igualitária para todos</td></tr>
            <tr><td><strong>Inovação</strong></td><td>Atualização constante de métodos e conteúdos</td></tr>
            <tr><td><strong>Cidadania</strong></td><td>Formação de profissionais conscientes e responsáveis</td></tr>
        </table>

        <h2>Centro Paula Souza</h2>
        <p>O Centro Paula Souza (CPS) é uma autarquia do Governo do Estado de São Paulo, vinculada à Secretaria de Ciência, Tecnologia e Inovação. Administra 229 Etecs e 73 Fatecs, atendendo mais de 300 mil alunos em todo o Estado.</p>

    </main>

    <aside class="sidebar">
        <div class="widget">
            <div class="widget-header">Institucional</div>
            <div class="widget-body">
                <ul class="links-uteis">
                    <li><a href="/pages/institucional.php"><i class="fas fa-school"></i> A Escola</a></li>
                    <li><a href="/pages/missao.php"><i class="fas fa-bullseye"></i> Missão, Visão e Valores</a></li>
                    <li><a href="/pages/equipe.php"><i class="fas fa-users-cog"></i> Equipe de Direção</a></li>
                    <li><a href="/pages/ppp.php"><i class="fas fa-file-alt"></i> Projeto Político Pedagógico</a></li>
                    <li><a href="/pages/regimento.php"><i class="fas fa-gavel"></i> Regimento Comum</a></li>
                </ul>
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">Informações</div>
            <div class="widget-body">
                <div class="calendario-info">
                    <p><i class="fas fa-map-marker-alt"></i> Rua dos Andradas, 140 – Luz, São Paulo/SP</p>
                    <p><i class="fas fa-phone"></i> (11) 3209-0088</p>
                    <p><i class="fas fa-subway"></i> Próximo ao Metrô Luz</p>
                </div>
            </div>
        </div>
    </aside>
</div>

<?php include '../includes/footer.php'; ?>
