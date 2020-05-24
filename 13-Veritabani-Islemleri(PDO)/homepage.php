<h3>PDO Process List</h3>

<?php
// select * from table_name
// INNER JOIN table_name ON table_name.id = table_name.id
// prepare - execute
// query
// fetch() - fetch_all()

// list with prepare - execute
/*
$query = $db->prepare('SELECT * FROM pdo_process');
$query->execute();
$pdo_process = $query->fetchAll(PDO::FETCH_ASSOC);
print_r($pdo_process);
*/

// list with query

$pdo_process = $db
    ->query('SELECT pdo_process.id, pdo_process.title, pdo_process.status, categories.name as category_name FROM pdo_process INNER JOIN categories ON categories.id = pdo_process.category_id ORDER BY pdo_process.title')->fetchAll(PDO::FETCH_ASSOC);
//print_r($pdo_process);

?>

<?php if($pdo_process):?>
    <ul>
        <?php foreach ($pdo_process as $pdo):?>
            <?php if($pdo['status'] ==1 ):?>
                <li>
                    <?php echo $pdo['title']?> -
                    (<?php echo $pdo['category_name']?>)
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

