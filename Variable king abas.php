 <style type="text/css">
    table{
      background:#cac;
      margin-left: 30;
    border-top: 2px solid #444;
    border-left: 2px solid #444;
    border-collapse: collapse;
    width: 50%; 
    margin-left: 25%; 
      
    }
    
    td{
        border-bottom: 2px solid #444;
        border-right: 2px solid #444;
        padding: 20px;

    } 
    .t{
 background: red;
 font-weight: bold;
  font-family: Arial;
    }
td:hover {
  background: #fff;
}
.ty{
  text-align: right;
   text-align: right;
    text-align: right;
     text-align: right;
      text-align: right;
}
p{
 text-align: center;

}
        
 </style>
    
<p>ASSIGNMEN ONE</p>

<?php
$item_ID="4010";
$item_Name= "yaanyo";
$qty="3";
$price="12";
$total=$qty*$price;
$discount="20";
$cash="10";

?>
<table border="1">
    <tr><td class="t">Item_ID</td><td class="ty"><?php echo "$item_ID";?></td></tr>
    <tr><td class="t">Item_Name</td><td><?php echo "$item_Name";?></td></tr>
    <tr><td class="t">Quantity</td><td class="ty"><?php echo "$qty";?></td></tr>
    <tr><td class="t">Price</td><td class="ty"><?php echo "$price";?></td></tr>
    <tr><td class="t">total</td><td class="ty"><?php echo "$total";?></td></tr>
    <tr><td class="t">Discount</td><td class="ty"><?php echo "$discount";?></td></tr>
    <tr><td class="t">Amount</td><td class="ty"><?php echo "$cash";?></td></tr>
  <tr><td class="t">Balance</td><td class="ty"><?php echo $total-$discount-$cash;?></td></tr>

</table>