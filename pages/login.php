<?php
session_start();
require_once ("classes/DAO/accountDAO.php");

$accountDAO = new AccountDAO();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>::Login::</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
    </head>
    <body>

        <form method="post" name="frmLogin">
            <table>
				<tr>
					<td>Email:</td>
					<td>
						<input type="text" name="txtEmail" autocomplete="off" />
					</td>
				</tr>
				<tr>
					<td>Senha:</td>
					<td>
						<input type="text" name="txtSenha" autocomplete="off" />
					</td>
				</tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="btnSubmit" value="Login" class="btnSubmit" /> <a href="index.php">Voltar</a>
                    </td>
                </tr>
                </table>
            </form>
    </body>
</html>

<?php
if (isset($_POST['btnSubmit'])) {

    if ($accountDAO->login($_POST['txtEmail'], $_POST['txtSenha'])) {
        $_SESSION['logado'] = '1';
    ?>
        <script type="text/javascript">
            document.location.href = "painel.php";
        </script>
    <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Usuário ou senha inválido.");
        </script>
        <?php
    }
}
?>
