<?php
$titulo = 'Fale Conosco';
include '../includes/header.php';
?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <div class="container">
        <a href="/index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Fale Conosco</span>
    </div>
</div>

<div class="pagina-interna">
    <main class="pagina-conteudo">

        <h1>Fale Conosco</h1>

        <p>Utilize o formulário abaixo para entrar em contato com a Etec São Paulo. Nossa equipe responderá em até 2 dias úteis.</p>

        <div class="aviso">
            <i class="fas fa-exclamation-triangle"></i>
            Para assuntos urgentes, entre em contato diretamente pelo telefone <strong>(11) 3209-0088</strong>.
        </div>

        <form class="form-contato" id="formContato">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="form-grupo">
                    <label for="nome">Nome completo *</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                </div>
                <div class="form-grupo">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                </div>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
                <div class="form-grupo">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999">
                </div>
                <div class="form-grupo">
                    <label for="assunto">Assunto *</label>
                    <select id="assunto" name="assunto" required>
                        <option value="">Selecione...</option>
                        <option>Informações sobre cursos</option>
                        <option>Vestibulinho</option>
                        <option>Estágio</option>
                        <option>Secretaria Acadêmica</option>
                        <option>Reclamação / Sugestão</option>
                        <option>Outro</option>
                    </select>
                </div>
            </div>

            <div class="form-grupo">
                <label for="mensagem">Mensagem *</label>
                <textarea id="mensagem" name="mensagem" placeholder="Descreva sua dúvida ou solicitação..." required></textarea>
            </div>

            <button type="submit" class="btn-enviar">
                <i class="fas fa-paper-plane"></i> Enviar Mensagem
            </button>
        </form>

        <h2 style="margin-top:36px;">Outras formas de contato</h2>

        <table class="tabela-etec">
            <thead>
                <tr>
                    <th>Setor</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Secretaria Acadêmica</td>
                    <td>(11) 3209-0088 r.201</td>
                    <td>secretaria.etecsp@cps.sp.gov.br</td>
                    <td>7h às 22h (Seg–Sex)</td>
                </tr>
                <tr>
                    <td>Diretoria</td>
                    <td>(11) 3209-0088 r.101</td>
                    <td>diretoria.etecsp@cps.sp.gov.br</td>
                    <td>8h às 17h (Seg–Sex)</td>
                </tr>
                <tr>
                    <td>Serviços Administrativos</td>
                    <td>(11) 3209-0088 r.150</td>
                    <td>admin.etecsp@cps.sp.gov.br</td>
                    <td>8h às 17h (Seg–Sex)</td>
                </tr>
                <tr>
                    <td>Coord. de Estágio</td>
                    <td>(11) 3209-0088 r.210</td>
                    <td>estagio.etecsp@cps.sp.gov.br</td>
                    <td>8h às 17h (Seg–Sex)</td>
                </tr>
            </tbody>
        </table>

    </main>

    <aside class="sidebar">

        <div class="widget">
            <div class="widget-header">Localização</div>
            <div class="widget-body">
                <div class="calendario-info">
                    <p><i class="fas fa-map-marker-alt"></i>
                        Rua dos Andradas, 140<br>
                        Santa Ifigênia – São Paulo/SP<br>
                        CEP: 01208-000
                    </p>
                    <p><i class="fas fa-subway"></i> Metrô: Luz (Linha 1 e 4)</p>
                    <p><i class="fas fa-bus"></i> Várias linhas de ônibus</p>
                </div>
                <a href="https://maps.google.com/?q=Rua+dos+Andradas+140+Sao+Paulo" target="_blank" class="btn-primary" style="margin-top:10px;font-size:0.8rem;padding:8px 14px;">
                    <i class="fas fa-map"></i> Ver no mapa
                </a>
            </div>
        </div>

        <div class="widget">
            <div class="widget-header">Horários de Atendimento</div>
            <div class="widget-body">
                <div class="calendario-info">
                    <p><i class="fas fa-clock"></i> Segunda a Sexta: 7h às 22h</p>
                    <p><i class="fas fa-clock"></i> Sábados: 7h às 17h</p>
                    <p><i class="fas fa-times-circle"></i> Domingos e Feriados: Fechado</p>
                </div>
            </div>
        </div>

        <div class="widget">
            <div class="widget-header">Redes Sociais</div>
            <div class="widget-body">
                <div class="redes-sociais-footer" style="justify-content:center;gap:14px;">
                    <a href="#" style="width:40px;height:40px;background:var(--azul-cps);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1rem;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" style="width:40px;height:40px;background:var(--azul-cps);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1rem;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" style="width:40px;height:40px;background:var(--azul-cps);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1rem;">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

    </aside>
</div>

<?php include '../includes/footer.php'; ?>
