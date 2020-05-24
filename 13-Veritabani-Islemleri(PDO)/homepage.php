<?php require 'header.php';?>
<h3>PDO Process List</h3>

<?php
// select * from table_name
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

$pdo_process = $db->query('SELECT * FROM pdo_process')->fetchAll(PDO::FETCH_ASSOC);
//print_r($pdo_process);

?>

<?php if($pdo_process):?>
    <ul>
        <?php foreach ($pdo_process as $pdo):?>
            <?php if($pdo['status'] ==1 ):?>
                <li>
                    <?php echo $pdo['title']?>
                    <a href="index.php?page=read&id=<?php echo $pdo['id']?>">[Read]</a>
                    <a href="index.php?page=edit&id=<?php echo $pdo['id']?>">[Edit]</a>
                    <a href="index.php?page=delete&id=<?php echo $pdo['id']?>">[Delete]</a>
                </li>
            <?php else:?>
            <div>There is a record(s), but status is 0. Please make it active on database to see.<a href="index.php?page=edit&id=<?php echo $pdo['id']?>">[Edit]</a></div>
            <?php endif;; ?>
        <?php endforeach; ?>
    </ul>
<?php else:?>
    <div>
        There is no record.
    </div>
<?php endif; ?>

