<?php

function custom_error_handler($no, $msg, $file, $line){
    ?>
    <div>
        <h3>Error</h3>
        <p>
            <?php echo $msg; ?>
        </p>
    </div>
    <?php

    //hataları dosyaya yaz
    $error_data = $no . ' | ' . $msg . ' | ' . $file . ' | ' . $line . "\n";
    file_put_contents('error.log', $error_data, FILE_APPEND);

    $db = new PDO('mysql:host=localhost; dbname=php_tutorial','root', '');
    $insert = $db->prepare('INSERT INTO error_logs SET no = ?, msg = ?, file = ?, line = ?');
    $insert->execute([$no, $msg, $file, $line]);
}

set_error_handler('custom_error_handler');

echo substr();
echo $test;