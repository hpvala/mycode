 <?php
$getPrice = str_replace(',','.', '123,478,20');
$tax = 123;
$getVal =  money_format("%.2i", ($getPrice / $tax));
$getReplcePrice = str_replace('.',',',$getVal);
?>
