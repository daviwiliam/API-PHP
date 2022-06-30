<?php

require_once 'dbconnect.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) :
    while ($user = mysqli_fetch_array($result)) :
        $dados[] = array(
            'id' => $user['id'],
            'name' => $user['nome'],
            'email' => $user['email'],
            'idade' => $user['idade']
        );
    endwhile;
else :
    echo 'nenhum usuario encontrado';
endif;

echo json_encode($dados);
