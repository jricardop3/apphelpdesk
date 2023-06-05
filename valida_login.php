<?php

session_start();

$autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;
$perfis = array (1 => 'administrativo', 2 => 'user');
$login_user =  [
    array ('id' => 1, 'email' => 'sac1@spgweb.com.br', 'senha' => '12345', 'perfil_id' => 1),
    array ('id' => 2, 'email' => 'sac2@spgweb.com.br', 'senha' => '123452', 'perfil_id' => 2),
    array ('id' => 3, 'email' => 'sac3@spgweb.com.br', 'senha' => '123452', 'perfil_id' => 2),
    array ('id' => 4, 'email' => 'sac4@spgweb.com.br', 'senha' => '123452', 'perfil_id' => 2),
];
//print_r($_POST);
$email = $_POST['email'];
$senha = $_POST['senha'];
       
         foreach ($login_user as $user){
            if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
                $autenticado = true;
                $usuario_id = $user['id'];
                $usuario_perfil_id = $user['perfil_id'];
                
            }
        
        }
        if ($autenticado) {
            echo 'usuario logado';
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['id'] = $usuario_id;
            $_SESSION['perfil_id'] = $usuario_perfil_id;
            header('location: home.php');
        }else { 
            $_SESSION['autenticado'] = 'NAO';
            header('location: index.php?login=erro');
        }
    

/* echo "<pre>";
    print_r($login_user);
    echo '<hr>';
echo "</pre>";
 */
?>