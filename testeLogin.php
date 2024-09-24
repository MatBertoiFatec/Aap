<?php
    include_once('config.php');

    if(isset($_POST["submit"]) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        echo "Usuário: " . $usuario . "<br>";
        echo "Senha: " . $senha . "<br>";

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        echo "SQL: " . $sql . "<br>";

        $result = $conexao->query($sql);

        if($result) {
            if($result->num_rows > 0) {
                // Login bem-sucedido, redirecionar para a página de sistema
                header("Location: sistema.php");
                exit();
            } else {
                // Login falhou, redirecionar para a página de login
                header("Location: signin.php?error=invalid");
                exit();
            }
        } else {
            // Erro na consulta SQL
            echo "Erro na consulta SQL: " . $conexao->error;
        }
    } else {
        // Dados de login não foram enviados corretamente, redirecionar para a página de login
        header('Location: signin.php?error=missing');
        exit();
    }
?>
