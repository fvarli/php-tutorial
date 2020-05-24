<a href="index.php?page=add_category">[Add Category]</a>
<hr>

<?php

$categories = $db->query('SELECT * FROM categories')->fetchAll(PDO::FETCH_ASSOC);

?>

<ul>
    <?php foreach ($categories as $ct): ?>
        <li>
            <a href="index.php?page=category&id=<?php echo $ct['id'];?>">
                <?php echo $ct['name'];?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

