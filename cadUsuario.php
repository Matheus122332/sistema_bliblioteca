<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script defer src="script.js"></script>
</head>
<body>
    <section>
        <div class="titulo">
            <h1>Cadastre-se</h1>
        </div>
        <form action="cadastrarUsuario.php" method="POST">
            <div class="campos">
                <label for="nome">Nome:</label>
                <input type="text" name="Nome" id="nome" placeholder="Nome:" required>
            </div>
            <div class="campos">
                <label for="idade">Idade:</label>
                <input type="number" name="Idade" id="idade" placeholder="Informe sua Idade:" required>
            </div>
            <div class="campos">
                <label for="cpf">Cpf:</label>
                <input type="text" name="Cpf" id="cpf" placeholder="Informe seu cpf:" required>
            </div>
            <div class="campos">
                <label for="rg">Rg:</label>
                <input type="text" name="Rg" id="rg" placeholder="Informe seu RG:" required>
            </div>
            <div class="campos">
                <label for="numMatricula">Número da Matrícula:</label>
                <input type="text" name="numMatricula" id="numMatricula" placeholder="Informe seu número da matrícula:" required>
                <div id="numMatriculaError" class="erro-mensagem" aria-live="polite"></div>
            </div>
            <div class="campos">
                <label for="dtNascimento">Data de Nascimento:</label>
                <input type="text" name="dtNascimento" id="dtNascimento" placeholder="Data de Nascimento:" required>
            </div>
            <div class="campos">
                <label for="email">Email:</label>
                <input type="email" name="Email" id="email" placeholder="Informe seu email:" required>
            </div>
            <div class="campos">
                <label for="senha">Senha:</label> 
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha:" required>
            </div>
            <div class="campos"> 
                <label for="confirmar_senha">Confirmar Senha:</label> 
                <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha:" required aria-required="true"> 
                <div id="senhaError" class="erro-mensagem" aria-live="polite"></div>
            </div>
            <div class="campos">
                <input type="submit" value="Criar conta" aria-label="Criar Conta">
            </div>
        </form>
        <p>Já tem uma conta? <a href="formLogin.php">Faça login</a></p>
    </section>
</body>
</html>
