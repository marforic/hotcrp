<?php 
include('../Code/confHeader.inc');
?>

<html>

<?php  $Conf->header("Activities for all Users") ?>
<body>

<?php 
$AllPrefix="";
include("../Tasks-All.inc");
?>

<?php  $Conf->footer() ?>

</body>
</html>
