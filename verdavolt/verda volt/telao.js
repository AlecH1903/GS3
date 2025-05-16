document.addEventListener('DOMContentLoaded', () => {
    const imagemTelao = document.getElementById('imagem-telao');
    const miniaturas = document.querySelectorAll('.miniatura');

    miniaturas.forEach(miniatura => {
        miniatura.addEventListener('click', () => {
            imagemTelao.src = miniatura.src;
        });
    });
});