<html>
<head>
<style>
	body{
    background-color:  rgba(144, 193, 233, 0.902);
  }
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
		$book = $_POST['book'];
		$number = $_POST['number'];

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'><span ><b>$book</b></span>".bar128(stripcslashes($_POST['number']))." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>