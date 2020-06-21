<?php
require 'db.php';

$id = $_POST['id'];

$query = $db->prepare('SELECT * FROM load_more WHERE id < :id ORDER BY id DESC LIMIT 0,7');
$query->execute([
    'id' => $id
]);

$data = $query->fetchAll(PDO::FETCH_ASSOC);

$html = '';
foreach ($data as $dt){
    ob_start();
        require 'comment.php';
    $html .= ob_get_clean();
}

echo json_encode([
    'html' => $html,
    'hidden' => count($data) < 7 ? true : false
]);