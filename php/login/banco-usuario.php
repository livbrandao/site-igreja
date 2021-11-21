<?php require_once "conecta.php"?>
<?php require_once "Pessoa.php" ?>
<?php 
function buscaUsuario($conexao,$login,$senha){

    $login=mysqli_real_escape_string($conexao,$login); 
    $sql="select * from admin where login='$login' 
		and senha=MD5('$senha')";
		$resultado=mysqli_query( $conexao, $sql);
		$usuario= mysqli_fetch_assoc($resultado);
		
		return $usuario;
} 

// ----------------------LISTAR-------------------------------------
function listaPessoa($conexao){
  $sql="select * from admin";
  $resultado=mysqli_query($conexao,$sql);
  while($array=mysqli_fetch_assoc($resultado)) { ?>

<!-- HTML FORMULARIO -->
<link rel="stylesheet" href="../../css/normalize.css">
<link rel="stylesheet" href="../../css/reset.css">
<link rel="stylesheet" href="../../css/grid.css">
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/eventos.css">
<link rel="stylesheet" href="../../css/login.css">
<link rel="stylesheet" href="../../css/cultos.css">
<link rel="stylesheet" href="../../css/responsivo.css">

<section class="container agenda grid-7">
  <form action='alterarForm.php' method=GET class='form-evento'>
    <input type=hidden value=<?php echo $array['id'];?> name=id>

    <label>Login </label>
    <input type=text value=<?php echo $array['login'];?> name=login>

    <label>Senha:</label>
    <input type=text value=<?php echo $array['senha'];?> name=senha>

    <button type=submit class="btn btn-black"> Alterar </button>
  </form>

  <br>

  <form action="removePessoa.php" method="post" class='form-evento'>
    <input type=hidden value=<?php echo $array['id'];?> name='id'>
    <button type=submit class="btn btn-black"> Remover </button>
  </form>
</section>

<?php }
  }

  // ----------------------DELETE-------------------------------------
  function removePessoa($conexao,$pessoa){
    $sql="delete from admin where id=$pessoa->id";
    $resultado=mysqli_query($conexao,$sql);
    return $resultado;  
  }
  
// ----------------------ALTERAR-------------------------------------
function alteraPessoa($conexao,$pessoa){
  $sql="update admin set login='$pessoa->login'
		where id=$pessoa->id";
  $resultado=mysqli_query($conexao,$sql);
  return $resultado;    
}
?>