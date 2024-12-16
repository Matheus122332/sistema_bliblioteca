document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('cadastroUsuarioForm');
    const nomeInput = document.getElementById('nome');
    const idadeInput = document.getElementById('idade');
    const cpfInput = document.getElementById('cpf');
    const rgInput = document.getElementById('rg');
    const numMatriculaInput = document.getElementById('numMatricula');
    const dtNascimentoInput = document.getElementById('dtNascimento');
    const emailInput = document.getElementById('email');
    const senhaInput = document.getElementById('senha');
    const confirmarSenhaInput = document.getElementById('confirmar_senha');
    const senhaError = document.getElementById('senhaError');
    form.addEventListener('submit', function(event) {
        let valid = true;
        // Verificação de campos obrigatórios
        if (!nomeInput.value) {
            alert('O campo Nome é obrigatório.');
            valid = false;
        }
        if (!idadeInput.value || isNaN(idadeInput.value) || idadeInput.value < 1) {
            alert('O campo Idade é obrigatório e deve ser um número válido.');
            valid = false;
        }
        if (!cpfInput.value) {
            alert('O campo CPF é obrigatório.');
            valid = false;
        }
        if (!rgInput.value) {
            alert('O campo RG é obrigatório.');
            valid = false;
        }
        if (!numMatriculaInput.value || numMatriculaInput.value.length !== 11) {
            alert('O campo Número de Matrícula é obrigatório e deve ter exatamente 11 dígitos.');
            valid = false;
        }
        if (!dtNascimentoInput.value) {
            alert('O campo Data de Nascimento é obrigatório.');
            valid = false;
        }
        if (!emailInput.value || !emailInput.value.includes('@')) {
            alert('O campo Email é obrigatório e deve ser um email válido.');
            valid = false;
        }
        if (!senhaInput.value) {
            alert('O campo Senha é obrigatório.');
            valid = false;
        }
        if (senhaInput.value !== confirmarSenhaInput.value) {
            alert('As senhas não coincidem.');
            valid = false;
        }
        if (!valid) {
            event.preventDefault();
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const numMatriculaInput = document.getElementById('numMatricula');
    const numMatriculaError = document.getElementById('numMatriculaError');
    const cpfInput = document.getElementById('cpf');
    const cpfError = document.getElementById('cpfError');
    // Função para verificar o comprimento do número de matrícula
    function verificarNumMatricula() {
        const numMatricula = numMatriculaInput.value;
        if (numMatricula.length !== 11) {
            numMatriculaError.style.display = 'block';
            numMatriculaError.innerHTML = 'O número de matrícula deve ter exatamente 11 dígitos.';
            numMatriculaInput.setCustomValidity("O número de matrícula deve ter exatamente 11 dígitos.");
        } else {
            numMatriculaError.style.display = 'none';
            numMatriculaInput.setCustomValidity("");
        }
    }
    // Função para validar CPF
    function validarCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g,'');
        if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false;
        let soma = 0, resto;
        for (let i = 1; i <= 9; i++) soma += parseInt(cpf.substring(i-1, i)) * (11 - i);
        resto = (soma * 10) % 11;
        if ((resto === 10) || (resto === 11)) resto = 0;
        if (resto !== parseInt(cpf.substring(9, 10))) return false;
        soma = 0;
        for (let i = 1; i <= 10; i++) soma += parseInt(cpf.substring(i-1, i)) * (12 - i);
        resto = (soma * 10) % 11;
        if ((resto === 10) || (resto === 11)) resto = 0;
        if (resto !== parseInt(cpf.substring(10, 11))) return false;
        return true;
    }
    // Função para verificar CPF
    function verificarCPF() {
        const cpf = cpfInput.value;
        if (!validarCPF(cpf)) {
            cpfError.style.display = 'block';
            cpfError.innerHTML = 'CPF inválido.';
            cpfInput.setCustomValidity("CPF inválido.");
        } else {
            cpfError.style.display = 'none';
            cpfInput.setCustomValidity("");
        }
    }
    // Adicionar eventos de input para verificação em tempo real
    numMatriculaInput.addEventListener('input', verificarNumMatricula);
    cpfInput.addEventListener('input', verificarCPF);
    // Verificação de senhas (mantendo o código existente para senhas)
    const senhaInput = document.getElementById('senha');
    const confirmarSenhaInput = document.getElementById('confirmar_senha');
    const senhaError = document.getElementById('senhaError');
    function verificarSenhas() {
        const senha = senhaInput.value;
        const confirmarSenha = confirmarSenhaInput.value;
        if (confirmarSenha !== "" && senha !== confirmarSenha) {
            senhaError.style.display = 'block';
            senhaError.innerHTML = 'As senhas não coincidem.';
            confirmarSenhaInput.setCustomValidity("As senhas não coincidem.");
        } else {
            senhaError.style.display = 'none';
            confirmarSenhaInput.setCustomValidity("");
        }
    }
    senhaInput.addEventListener('input', verificarSenhas);
    confirmarSenhaInput.addEventListener('input', verificarSenhas);
});
