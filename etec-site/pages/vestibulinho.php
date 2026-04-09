<?php
$titulo = 'Vestibulinho';
include '../includes/header.php';
?>

<div class="breadcrumb">
    <div class="container">
        <a href="/index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Vestibulinho</span>
    </div>
</div>

<div class="pagina-interna">
    <main class="pagina-conteudo">

        <h1>Vestibulinho Etec – 2º Semestre 2026</h1>

        <div class="aviso">
            <i class="fas fa-info-circle"></i>
            As inscrições são realizadas exclusivamente pelo site oficial <strong>vestibulinhoetec.com.br</strong>
        </div>

        <p>O Vestibulinho é o processo seletivo das Escolas Técnicas Estaduais (Etecs) para ingresso nos cursos técnicos. As vagas são gratuitas e o processo é democrático e transparente.</p>

        <h2>Calendário do Vestibulinho</h2>

        <table class="tabela-etec">
            <thead>
                <tr><th>Etapa</th><th>Data</th></tr>
            </thead>
            <tbody>
                <tr><td>Inscrições</td><td>01 a 30 de junho de 2026</td></tr>
                <tr><td>Divulgação dos locais de prova</td><td>10 de julho de 2026</td></tr>
                <tr><td>Aplicação da prova</td><td>20 de julho de 2026</td></tr>
                <tr><td>Divulgação do gabarito</td><td>21 de julho de 2026</td></tr>
                <tr><td>Divulgação do resultado</td><td>01 de agosto de 2026</td></tr>
                <tr><td>Matrícula dos aprovados</td><td>04 a 06 de agosto de 2026</td></tr>
                <tr><td>Início das aulas</td><td>10 de agosto de 2026</td></tr>
            </tbody>
        </table>

        <h2>Vagas Ofertadas – Etec São Paulo</h2>

        <table class="tabela-etec">
            <thead>
                <tr><th>Curso</th><th>Período</th><th>Vagas</th><th>Modalidade</th></tr>
            </thead>
            <tbody>
                <tr><td>Técnico em Administração</td><td>Manhã / Tarde / Noite</td><td>40</td><td>Modular</td></tr>
                <tr><td>Técnico em Desenvolvimento de Sistemas</td><td>Manhã / Noite</td><td>40</td><td>Modular</td></tr>
                <tr><td>Técnico em Edificações</td><td>Tarde</td><td>35</td><td>Modular</td></tr>
                <tr><td>Técnico em Eletroeletrônica</td><td>Integral</td><td>35</td><td>Integrado EM</td></tr>
                <tr><td>Técnico em Eletrônica</td><td>Noite</td><td>40</td><td>Modular</td></tr>
                <tr><td>Técnico em Marketing</td><td>Tarde / Noite</td><td>40</td><td>Modular</td></tr>
                <tr><td>Técnico em Recursos Humanos</td><td>Manhã</td><td>40</td><td>Modular</td></tr>
            </tbody>
        </table>

        <h2>Como se Inscrever</h2>
        <p><strong>1.</strong> Acesse <strong>vestibulinhoetec.com.br</strong> durante o período de inscrições.</p>
        <p><strong>2.</strong> Crie um cadastro com seu CPF e dados pessoais.</p>
        <p><strong>3.</strong> Escolha o curso, período e unidade desejada.</p>
        <p><strong>4.</strong> Confirme a inscrição e guarde o número de protocolo.</p>
        <p><strong>5.</strong> Acompanhe o local de prova e o resultado pelo mesmo site.</p>

        <div style="margin-top:24px;">
            <a href="https://www.vestibulinhoetec.com.br" target="_blank" class="btn-primary">
                <i class="fas fa-external-link-alt"></i> Acessar Site do Vestibulinho
            </a>
        </div>

    </main>

    <aside class="sidebar">
        <div class="widget-vestibulinho">
            <h3><i class="fas fa-graduation-cap"></i> Inscreva-se!</h3>
            <p>Garanta sua vaga gratuitamente em um dos cursos técnicos da Etec São Paulo.</p>
            <a href="https://www.vestibulinhoetec.com.br" target="_blank" class="btn-vest">Ir para o site</a>
        </div>

        <div class="widget">
            <div class="widget-header">Documentos Necessários</div>
            <div class="widget-body">
                <ul class="links-uteis">
                    <li><a href="#"><i class="fas fa-id-card"></i> RG ou Certidão de Nascimento</a></li>
                    <li><a href="#"><i class="fas fa-file"></i> CPF do candidato</a></li>
                    <li><a href="#"><i class="fas fa-graduation-cap"></i> Histórico Escolar (EM)</a></li>
                    <li><a href="#"><i class="fas fa-home"></i> Comprovante de residência</a></li>
                    <li><a href="#"><i class="fas fa-camera"></i> Foto 3x4 recente</a></li>
                </ul>
            </div>
        </div>
    </aside>
</div>

<?php include '../includes/footer.php'; ?>
