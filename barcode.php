<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php
    
    include 'barcode128.php';
    
    $product_name=$_POST['product_name'];
    $location=$_POST['location'];
    $locabcode=$_POST['locabcode'];
   
   
		$quantity_t = $_POST['quantity_t'];
    $order_unit=$_POST['order_unit'];
    $num_b=$_POST['num_b'];
	

		for($i=1;$i<=$_POST['print_qty'];$i++){
			//echo "<p class='inline'><span ><b>$product_name</b></span>".bar128(stripcslashes($_POST['locabcode']))." ".bar128(stripcslashes($_POST['location']))." ".bar128(stripcslashes($_POST['quantity_t']))";


    ?>
    <div class="row">
      <div>
        <?php
          echo   "$product_name"."<br/>"."<b>$location</b>".bar128(stripcslashes($_POST['locabcode']));
        ?>
      </div>
      <div class="pl-3" style="margin-top: 30px;">
        <div>
          <label for="" ><?php echo "入数: ".$quantity_t; ?></label>
          
          
        </div>
        <div style="margin-top: -32px;">
        <label  class="pt-3" for=""><?php echo "発単 ".$order_unit; ?></label>
        <div style="margin-top: -40px;">
          <?php
              echo " <br />ボール入数: ".$num_b;
          ?>
        </div>
          
        </div>
        
      </div>
    </div>
    <?php } ?>
   
	</div>
</body>
</html>
