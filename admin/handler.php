<?
require_once 'inc/db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $db->query("DELETE FROM `reviews` WHERE `reviews`.`id` = '".$id."'");
    header("Location: /admin");
}
