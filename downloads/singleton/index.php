<?php
define ('BASEPATH', realpath(dirname(__FILE__)));
require_once ('autoload.php');

$db = Database::getInstance();
$mysqli = $db->getConnection();
$sql_query = "SELECT articel FROM articel WHERE 1";
$result = $mysqli->query($sql_query);
var_dump($result);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../prism.css"/>
    <title>Singleton Pattern</title>
</head>
<body>
<article>
<?php echo $result; ?>
</article>
<script src="../prism.js"></script>
</body>
</html>