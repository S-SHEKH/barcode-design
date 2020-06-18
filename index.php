<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Barcode Generator Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div style="margin: 10%;">
  	<h2 class="text-center"style="width:900px">Being Group</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<!-- <div class="form-group">
      <label class="control-label col-sm-2" for="product">Product:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product" name="product">
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_name">商品名</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product_name"" name="product_name"">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="location">ロケーション</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="location" name="location">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="locabcode">ロケーバーコード</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="locabcode" name="locabcode">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="quantity_t">入数</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="number" class="form-control" id="quantity_t" name="quantity_t">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="order_unit">発単</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="order_unit"  name="order_unit">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="num_b">ボール入数</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="num_b"  name="num_b">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Barcode level</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">ラベル印刷</button>
      </div>
    </div>
  </form>
  </div>
</div>

</body>
</html>
