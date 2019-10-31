<?php include_once 'topo.php'; ?>
    <center>
        <div class="container">
        <h3>Logar no Sistema</h3>
        <br>
    <fieldset>
        <legend>:::SISTEMA:::</legend>
        <form action="verificarlogin.php" method="post">
            <label for="email">E-mail :</label><input type="text" name="email"
            placeholder="Digite o E-mail" class="form-control">
            <br><br>
            Senha :<input type="password" name="senha" placeholder="Digite a Senha"
            class="form-control">
            <br> <br>
            <input type="submit" value="Entrar no Sistema" class="btn btn-info">
            </form>
                <br>
            <h2>
                    <?php
                if(isset($_GET["m"])){
                    echo base64_decode ($_GET["m"]);
                }
                ?>
                </h2>

        </fieldset>
    </center>
</body>
</html>