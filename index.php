<?php 
require 'vendor/autoload.php';

use Rmagnoprado\Debug\Main;

$debug = new Main();
require_once('includes/header.php'); 
require_once('includes/nav.php');

?>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <?php
	  
        $status = json_encode(array("Key1"=>"Value1","Key2"=>"value2"));  
        echo "<h3>Debug Array</h3>";
        echo $debug->getBody(); 
      ?>
    </div>
  </div>
</div>


<?php
require_once('includes/footer.php'); 
echo $debug->getThree();
?>
<script type="text/javascript">
<?php $debug->getScript($status); ?>
</script>
</body>
</html>
