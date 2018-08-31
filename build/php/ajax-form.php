<?php

if (isset($_POST["message"])) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'message' => $_POST["message"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>