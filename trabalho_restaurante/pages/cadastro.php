<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta dall'Italia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href=".../css/mainstyle.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
 
<body>

    <?php 
        include '../_inc/menu.php';
     ?>

    <header>
        
    <h1 style="align-content: center; padding: 4.5px;">Registre-se Aqui!</h1>
    <section>
        <article>Insira seus Dados Aqui:</article>
    </section>
</header>
    <div class="container mt-5">
        <form id="form" action="" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="sexoMasculino" value="Masculino">
                        <label class="form-check-label" for="sexoMasculino">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="sexoFeminino" value="Feminino">
                        <label class="form-check-label" for="sexoFeminino">Feminino</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <select class="form-select" id="estado" name="estado">
                    <option value="">Selecione...</option>
                    <option value="SP">São Paulo</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="MG">Minas Gerais</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem:</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <div id="result" class="mt-3"></div>
    </div>
 
    <footer style="display: flex;">
        <p  style=" align-content: center;">&copy; 2024. All rights reserved. Powered by Aster0id.</p>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>
    <script>
        s
        document.getElementById('form').addEventListener('submit', function (e) {
            e.preventDefault();
 
            let nome = document.getElementById('nome').value;
            let email = document.getElementById('email').value;
            let senha = document.getElementById('senha').value;
            let telefone = document.getElementById('telefone').value;
            let cpf = document.getElementById('cpf').value;
 
            // Verifica se algum sexo foi selecionado
            let sexoSelecionado = document.querySelector('input[name="sexo"]:checked');
            let sexo = sexoSelecionado ? sexoSelecionado.value : 'Não informado';
 
            let estado = document.getElementById('estado').value;
            let mensagem = document.getElementById('mensagem').value;
 
            let resultDiv = document.getElementById('result');
            resultDiv.innerHTML = `
                <div class="card">
                    <div class="card-body">
                        <p><strong>Nome:</strong> ${nome}</p>
                        <p><strong>Email:</strong> ${email}</p>
                        <p><strong>Senha:</strong> ${senha}</p>
                        <p><strong>Telefone:</strong> ${telefone}</p>
                        <p><strong>CPF:</strong> ${cpf}</p>
                        <p><strong>Sexo:</strong> ${sexo}</p>
                        <p><strong>Estado:</strong> ${estado}</p>
                        <p><strong>Mensagem:</strong> ${mensagem}</p>
                    </div>
                </div>
            `;
        });
    </script>
</body>
 
</html>