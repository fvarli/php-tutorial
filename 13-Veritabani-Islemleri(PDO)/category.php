<?php

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('Location:index.php?page=categories');
    exit;
}

$query = $db->prepare('SELECT * FROM categories WHERE  id = ? ');

$query->execute([$_GET['id']]);

$category = $query->fetch(PDO::FETCH_ASSOC);

if(!$category){
    header('Location:index.php?page=categories');
    exit;
}

$query = $db->prepare('SELECT * FROM pdo_process WHERE category_id = ? ORDER BY id DESC ');
$query->execute([$category['id']]);

$pdo_process = $query->fetchAll(PDO::FETCH_ASSOC);
/*
if(!empty($pdo_process)){
    print_r($pdo_process);
}else{
    echo "empty";
}
*/

?>

<h3><?php echo $category['name'];?> Category</h3>

<?php if($pdo_process):?>
    <ul>
        <?php foreach ($pdo_process as $pdo):?>
            <?php if($pdo['status'] ==1 ):?>
                <li>
                    <?php echo $pdo['title']?>
                    <div>
                        <a href="index.php?page=read&id=<?php echo $pdo['id']?>">[Read]</a>
                        <a href="index.php?page=edit&id=<?php echo $pdo['id']?>">[Edit]</a>
                        <a href="index.php?page=delete&id=<?php echo $pdo['id']?>">[Delete]</a>
                    </div>
                </li>
            <?php else:?>
                <div>There is a record(s), but status is 0. Please make it active to see.<a href="index.php?page=edit&id=<?php echo $pdo['id']?>">[Edit]</a></div>
            <?php endif;; ?>
        <?php endforeach; ?>
    </ul>
<?php else:?>
    <div>
        There is no record.
    </div>
<?php endif; ?>

