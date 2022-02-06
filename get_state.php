<?php
require_once("connection.php");

if(!empty($_GET['id'])) {
    $coun_id = $_GET["id"];
    $sql="SELECT * FROM sa_neighborhoods WHERE cityId IN ($coun_id)";
    $result = $pdo->query($sql)
    ?>
    <option value="">الحي</option>
    <?php
    foreach($result as $state) {
        ?>
        <option value="<?php echo $state["id"]; ?>"><?php echo $state["nameAr"]; ?></option>
        <?php
    }
}
?>
