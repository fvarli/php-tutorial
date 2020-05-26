<h3>PDO Process List</h3>

<form action="" method="get">
    <input type="text" class="date" name="start" placeholder="Start Date" value="<?php echo isset($_GET['start']) ? $_GET['start'] : ''; ?>"><br><br>
    <input type="text" class="date" name="last" placeholder="Last Date" value="<?php echo isset($_GET['last']) ? $_GET['last'] : ''; ?>"><br><br>
    <input type="text" name="search" placeholder="Search form the list" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>"><br><br>
    <button type="submit">Search</button>
</form>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $('.date').datepicker({
        dateFormat: 'yy-mm-dd'
    });
</script>

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

$where = [];

$sql = 'SELECT pdo_process.id, pdo_process.title, pdo_process.status, GROUP_CONCAT(categories.name) as category_name, GROUP_CONCAT(categories.id) as category_id FROM pdo_process INNER JOIN categories ON FIND_IN_SET(categories.id, pdo_process.category_id)';

if(isset($_GET['search']) && !empty($_GET['search'])){
    $where[]= '(pdo_process.title LIKE "%' . $_GET['search'] .'%" || pdo_process.content LIKE "%' . $_GET['search'] .'%" || categories.name LIKE "%' . $_GET['search'] .'%")';
}

if(isset($_GET['start']) && !empty($_GET['start']) && isset($_GET['last']) && !empty($_GET['last'])){
    $where[]= 'pdo_process.date BETWEEN "' . $_GET['start'] .' 00:00:00" AND "' . $_GET['last'] .' 23:59:59"';
}

if(count($where)>0){
    $sql .= ' WHERE '. implode('&& ', $where);
}

$sql .= ' GROUP BY pdo_process.id ORDER BY pdo_process.title';

//print_r($where);

echo $sql; //die();
echo '<br>';
echo '<br>';
$pdo_process = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

//print_r($pdo_process);

?>

<?php if($pdo_process):?>
    <ul>
        <?php foreach ($pdo_process as $pdo):?>
            <?php if($pdo['status'] ==1 ):?>
                <li>
                    <?php echo $pdo['title']?>

                    <?php // TODO get category key and value - video 97
                    $category_names = explode(' , ', $pdo['category_name']);
                    $category_ids = explode(', ', $pdo['category_id']);
                    foreach ($category_names as $key => $val){
                        echo '<a href="index.php?page=category&id' . $category_ids[$key] .'">' . $val . '</a> ';
                    }
                    ?>
                    <div>
                        <a href="index.php?page=read&id=<?php echo $pdo['id']?>">[Read]</a>
                        <a href="index.php?page=edit&id=<?php echo $pdo['id']?>">[Edit]</a>
                        <a href="index.php?page=delete&id=<?php echo $pdo['id'] //TODO add confirmation?>">[Delete]</a>
                    </div>
                </li>
            <?php else:?>
            <div>There is a record(s), but status is 0. Please make it active to see.<a href="index.php?page=edit&id=<?php echo $pdo['id']?>">[Edit]</a></div>
            <?php endif;; ?>
        <?php endforeach; ?>
    </ul>
<?php else:?>
    <div>
        <?php if (isset($_GET['search'])): ?>
            No search record.
        <?php else:?>
            There is no record.
        <?php endif; ?>
    </div>
<?php endif; ?>

