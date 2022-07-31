<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Barcode Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
  body{
    background-color:  rgba(144, 193, 233, 0.902);
  }
</style>
<body>

<div class="container">
  <div style="margin: 10%;">
  	<h2 class="text-center">BOOK BARCODE GENERATOR</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<div class="form-group">
      <label class="control-label col-sm-2" for="product">Book Name:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="book" name="book">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_id">Book Barcode Number:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="number" name="number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Generate</button>
      </div>
    </div>
  </form>
  </div>
</div>

</body>
</html>
