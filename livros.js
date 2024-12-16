document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('cadastroLivroForm');
    const nomeInput = document.getElementById('nome');
    const autorInput = document.getElementById('autor');
    const generoInput = document.getElementById('genero');
    const anoPublicacaoInput = document.getElementById('ano_publicacao');
    const isbnInput = document.getElementById('isbn');
    const quantidadeDisponivelInput = document.getElementById('quantidade_disponivel');

    form.addEventListener('submit', function(event) {
        let valid = true;

        // Validação simples para verificar se os campos estão preenchidos
        if (!nomeInput.value) {
            alert('O campo Nome é obrigatório.');
            valid = false;
        }

        if (!autorInput.value) {
            alert('O campo Autor é obrigatório.');
            valid = false;
        }

        if (!generoInput.value) {
            alert('O campo Gênero é obrigatório.');
            valid = false;
        }

        if (!anoPublicacaoInput.value || isNaN(anoPublicacaoInput.value) || anoPublicacaoInput.value < 1000 || anoPublicacaoInput.value > new Date().getFullYear()) {
            alert('O campo Ano de Publicação é obrigatório e deve ser um ano válido.');
            valid = false;
        }

        if (!quantidadeDisponivelInput.value || isNaN(quantidadeDisponivelInput.value) || quantidadeDisponivelInput.value < 1) {
            alert('O campo Quantidade Disponível é obrigatório e deve ser um número válido.');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
//Excluir livros
function confirmarExclusao(id) {
    if (confirm('Tem certeza de que deseja excluir este livro?')) {
        window.location.href = 'excluirLivro.php?id=' + id;
    }
}
