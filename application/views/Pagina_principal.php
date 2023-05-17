<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo;?></title>
    <link href="<?= base_url();?>application/assets/css/estilocadastro.css" rel="stylesheet"/>
</head>
<body>
<div class="box">
<fieldset>
    <legend><b></b>Formulario de cliente</legend>
    <br>
    <img src="<?= base_url();?>application/assets/imagens/download.png"/>
    <br><br>
    <form method="post" action="<?=base_url();?>Cad/salvar">
        <textarea name="mensagem"></textarea><br>
                <br>
                <div class="inputBox">
                    <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="name" class="labelInput">Name</label>
                </div>
                <br><br>
                    <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                    <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                    <div class="inputBox">
                    <input type="tel" name="semestre" id="semestre" class="inputUser" required>
                    <label for="semestre" class="labelInput">Semestre</label>
                </div>
                <br><br>
                    <label for="data_nascimento"><b>Data de nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="presenca" id="presenca" class="inputUser" required>
                    <label for="presenca" class="labelInput">presenca</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="faculdade" id="faculdade" class="inputUser" required>
                    <label for="estado" class="labelInput">faculdade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Atividades de hoje</label>
                </div>
                <br><br>
        <button type="submit">Enviar</button>
        <li><a href="<?=base_url()?>Cad/Cad">Cad</a></li>
        <li><a href="#contact">Contact</a></li>
    </form>
    </div>
</body>
</html>