<a href="index.php?page=add_category">[Add Category]</a>
<hr>

<?php

$categories = $db->query('SELECT categories.*, COUNT(pdo_process.id) as total_data FROM categories LEFT JOIN pdo_process ON pdo_process.category_id = categories.id GROUP BY categories.id')->fetchAll(PDO::FETCH_ASSOC);

?>

<ul>
    <?php foreach ($categories as $ct): ?>
        <li>
            <a href="index.php?page=category&id=<?php echo $ct['id'];?>">
                <?php echo $ct['name'];?>
                (<?php echo $ct['total_data']?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>

