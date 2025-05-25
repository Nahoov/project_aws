<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/modo-dark.css">
    <link rel="shorcut icon" href="../imagens/logo-black.jpeg">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <nav class="nav-bar-simples">
            <div class="logo">
                <a href="home.php">
                    <img class="imagem-logo" src="../imagens/logo-black.jpeg" alt="logo da loja" width="130px">
                </a>
            </div>
        </nav>
    </header>

    <main class="body-cadastro">
        <!-- versão padrão -->
        <div id="container" class="container-cadastro">

            <!-- LADO DIREITO -->
            <div class="texto-login">
                <div class="botoes-topo-tela-cadastro">
                    <a id="botao-voltar" href="home.php"><i class="fa-solid fa-left-long"></i></a>
                    <i id="item-lua" class="fa-solid fa-moon"></i>
                </div>

                <div class="centro-texto">
                    <h1> Criar Conta</h1>
                    <p>Já possui uma conta?</p>
                    <a class="login" href="login.php">Login</a>
                </div>
            </div>
            
            <!-- LADO ESQUERDO -->
            <div class="cadastro">

                <form action="processar_formulario.php" class="formulario" method="post" onsubmit="return validarSenhas()">

                    <div class="entrada-dados-cadastro">
                        <label for="nome_completo"><strong>Nome completo</strong></label>
                        <input type="text" name="nome_completo" id="nome_completo" minlength="10" maxlength="35" required>
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="cpf"> <strong>CPF</strong> </label>
                        <input type="text" name="cpf" id="cpf" minlength="11" maxlength="14"  placeholder="Ex: 123.456.789-00" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" required>
                    </div>
                                    
                    <div class="entrada-dados-cadastro">
                        <label for="data_nascimento"><strong>Data de nascimento</strong></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" placeholder="dd/mm/aaaa" required>
                    </div>
        
                    <div  class="entrada-dados-cadastro">
                        <label for="email"><strong>E-mail</strong></label>
                        <input type="email" name="email" id="email" minlength="11" maxlength="50" required>
                    </div>
        
                    <div  class="entrada-dados-cadastro">
                        <label for="tel_celular"><strong>Telefone Celular</strong></label>
                        <!--Localizar o erro--><input type="tel" name="tel_celular" id="tel_celular" placeholder="(DD) xxxxxxxxx" minlength="11" maxlength="15" required>
                    </div>

                    <div class="entrada-dados-cadastro">
                        <label for="rua_avenida"><strong>Endereço</strong></label>
                        <input type="text" name="endereco" id="rua_avenida" minlength="5" maxlength="50" required>
                    </div>
        
                
                    <div class="entrada-dados-cadastro">
                        <label for="login"><strong>Login</strong></label>
                        <input type="text" name="login" id="login" minlength="4" maxlength="8" pattern="[A-za-z\s]+" required>
                        <span class="aviso">*O nome deve conter no mínimo 4 caracteres</span>
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="senha"><strong>Senha</strong></label>
                        <input type="password" name="senha" id="senha" minlength="8" required>
                        <span class="aviso">*A senha deve conter 8 caracteres</span>
                    </div>
                    
                    <div class="entrada-dados-cadastro">
                        <label for="confirmar_senha"><strong>Confirmar Senha</strong></label>
                        <input type="password" name="confirmar_senha" id="confirmar_senha" minlength="8" required>
                        <span id="mensagem_erro" class="textoErro"></span>
                    </div>

                    <div class="botao-cadastro">
                        <button class="botao-primario" type="submit" onclick="validacao_cadastro()">Cadastrar</button>
                    </div>

                    </div>
        
                    
                </form>
            </div>
        </div>
    </main>

    <!--Versão Mobille -->
    <main class="body-cadastro-mobille">
        <div id="container" class="container-cadastro-mobille">
            
            <!--Login-->
            <div class="campo-login">
                <div class="botoes-topo-tela-cadastro-mobille">
                    <a id="botao-voltar" href="home.html"><i class="fa-solid fa-left-long"></i></a>
                    <i id="item-lua" class="fa-solid fa-moon"></i>
                </div>

                <div class="centro-texto-mobille">
                    <h1> Criar Conta</h1>
                    <p>Já possui uma conta?</p>
                    <a class="login" href="login.php">Login</a>
                </div>
                
            </div>
            
            <div class="cadastro-mobille">
                <form class="formulario-mobille">
                    <div class="entrada-dados-cadastro-mobille">
                        <label for="nome_completo"><strong>Nome completo</strong></label>
                        <input type="text" name="nome_completo" id="nome_completo" minlength="10" maxlength="" pattern="[A-z]" required>
                    </div>
                    
                    <div class="entrada-dados-cadastro-mobille">
                        <label for="cpf"><strong>CPF</strong></label>
                        <input type="text" name="cpf" id="cpf" minlength="11" maxlength="14" placeholder="Ex: 123.456.789-00" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}"  required>
                    </div>
                                    
                    <div class="entrada-dados-cadastro-mobille">
                        <label for="data_nascimento"><strong>Data de nascimento</strong></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" placeholder="dd/mm/aaaa" required>
                    </div>
        
                    <div  class="entrada-dados-cadastro-mobille">
                        <label for="email"><strong>E-mail</strong></label>
                        <input type="email" name="email" id="email" required>
                    </div>
        
                    <div  class="entrada-dados-cadastro-mobille">
                        <label for="tel_celular"><strong>Telefone Celular</strong></label>
                        <!--Localizar o erro--><input type="tel" name="tel_celular" id="tel_celular" minlength="11" maxlength="15" placeholder="(DD) xxxxxxxxx" required>
                    </div>

                    <div class="entrada-dados-cadastro">
                        <label for="rua_avenida"><strong>Endereço</strong></label>
                        <input type="text" name="rua_avenida" id="endereco" minlength="5" maxlength="50" required>
                    </div>
                    
                    <div class="entrada-dados-cadastro-mobille">
                        <label for=""><strong>Login</strong></label>
                        <input type="text" name="login" id="login" minlength="4" maxlength="8" pattern="[A-za-z\s]+" required>
                        <span class="aviso">*O nome deve conter no mínimo 4 caracteres</span>
                    </div>
                    
                    <div class="entrada-dados-cadastro-mobille">
                        <label for="senha"><strong>Senha</strong></label>
                        <input type="password" name="senha" id="senha" minlength="8" required>
                        <span class="aviso">*A senha deve conter 8 caracteres</span>
                    </div>
                    
                    <div class="entrada-dados-cadastro-mobille">
                        <label for="confirmar_senha"><strong>Confirmar Senha</strong></label>
                        <input type="password" name="confirmar_senha" id="confirmar_senha" minlength="8" required>
                        <span id="mensagem_erro" class="textoErro"></span>
                    </div>
    
                    <div class="botao-cadastro-mobille">
                        <button class="botao-primario" type="submit" onclick="validacao_cadastro()">Cadastrar</button>
                    </div>

                    </div>
        
                    <div class="botao-cadastro-mobille">
                        <button class="botao-primario" type="submit" onclick="validacao_cadastro()">Cadastrar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </main>

    <script src="../javascript/comandos.js"></script>
</body>
</html>
