<?php
require_once("connection.php");
//$db_handle = new DBController();
if(!empty($_GET['id'])) {
    $coun_id = $_GET["id"];
    $sql ="SELECT * FROM sa_cities WHERE provinceId IN ($coun_id)";
    $result = $pdo->query($sql)
    ?>
    <option value="">المدينه </option>
    <?php
    foreach($result as $state) {
        ?>
        <option value="<?php echo $state["id"]; ?>"><?php echo $state["nameAr"]; ?></option>
        <?php
    }
}
?>
