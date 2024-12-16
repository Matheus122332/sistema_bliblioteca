document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('emprestarLivroForm');
    const usuarioId = document.getElementById('usuario_id');
    const livroId = document.getElementById('livro_id');
    const dataEmprestimo = document.getElementById('data_emprestimo');

    form.addEventListener('submit', function(event) {
        let valid = true;

        if (!usuarioId.value) {
            alert('Por favor, selecione um usuário.');
            valid = false;
        }

        if (!livroId.value) {
            alert('Por favor, selecione um livro.');
            valid = false;
        }

        if (!dataEmprestimo.value) {
            alert('Por favor, selecione uma data de empréstimo.');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
