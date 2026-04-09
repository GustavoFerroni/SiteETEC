// =============================================
// ETEC SÃO PAULO – SCRIPTS PRINCIPAIS
// =============================================

document.addEventListener('DOMContentLoaded', function () {

    // ===== MENU MOBILE =====
    const menuToggle = document.getElementById('menuToggle');
    const navPrincipal = document.getElementById('navPrincipal');
    const itensComSub = document.querySelectorAll('.tem-sub');

    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            navPrincipal.classList.toggle('aberto');
            this.classList.toggle('ativo');
        });
    }

    // Accordion de submenu no mobile
    itensComSub.forEach(function (item) {
        const link = item.querySelector('a');
        link.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                item.classList.toggle('aberto');
            }
        });
    });

    // Fechar menu ao clicar fora
    document.addEventListener('click', function (e) {
        if (navPrincipal && !navPrincipal.contains(e.target) && menuToggle && !menuToggle.contains(e.target)) {
            navPrincipal.classList.remove('aberto');
        }
    });

    // ===== ANIMAÇÃO NÚMEROS =====
    const numeros = document.querySelectorAll('.numero[data-valor]');

    function animarNumero(el) {
        const alvo = parseInt(el.dataset.valor, 10);
        const duracao = 1800;
        const inicio = performance.now();

        function atualizar(agora) {
            const progresso = Math.min((agora - inicio) / duracao, 1);
            const easing = 1 - Math.pow(1 - progresso, 3);
            el.textContent = Math.floor(easing * alvo).toLocaleString('pt-BR') + (el.dataset.sufixo || '');
            if (progresso < 1) requestAnimationFrame(atualizar);
        }

        requestAnimationFrame(atualizar);
    }

    // IntersectionObserver para disparar animação ao entrar na tela
    if ('IntersectionObserver' in window) {
        const obs = new IntersectionObserver(function (entradas) {
            entradas.forEach(function (entrada) {
                if (entrada.isIntersecting) {
                    animarNumero(entrada.target);
                    obs.unobserve(entrada.target);
                }
            });
        }, { threshold: 0.3 });

        numeros.forEach(function (el) { obs.observe(el); });
    } else {
        numeros.forEach(function (el) {
            el.textContent = parseInt(el.dataset.valor).toLocaleString('pt-BR') + (el.dataset.sufixo || '');
        });
    }

    // ===== FORMULÁRIO CONTATO =====
    const formContato = document.getElementById('formContato');
    if (formContato) {
        formContato.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = formContato.querySelector('.btn-enviar');
            btn.disabled = true;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';

            // Simula envio (substitua por fetch real)
            setTimeout(function () {
                formContato.innerHTML = '<div class="aviso" style="background:#e6f4ea;border-color:#34a853;"><i class="fas fa-check-circle" style="color:#34a853;"></i> Mensagem enviada com sucesso! Em breve entraremos em contato.</div>';
            }, 1500);
        });
    }
});

// ===== ACESSIBILIDADE =====
function mudaFonte(delta) {
    const body = document.body;
    const estilo = window.getComputedStyle(body);
    const atual = parseFloat(estilo.fontSize);
    const novo = Math.min(Math.max(atual + delta * 2, 12), 24);
    body.style.fontSize = novo + 'px';
}

function toggleContraste() {
    document.body.classList.toggle('alto-contraste');
    localStorage.setItem('alto-contraste', document.body.classList.contains('alto-contraste'));
}

// Restaurar contraste salvo
if (localStorage.getItem('alto-contraste') === 'true') {
    document.body.classList.add('alto-contraste');
}
