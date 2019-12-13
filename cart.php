<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
        foreach($_SESSION["shopping_cart"] as $key => $value) {
                if($_POST["code"] == $key){
                unset($_SESSION["shopping_cart"][$key]);
                $status = "<div class='box' style='color:red;'>
                Product is removed from your cart!</div>";
                }
                if(empty($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
                        }
                }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break;
    }
}

}
?>
<html>
<head>
<style>
body {
  background-color: #ffcc99;
  text-align: center;
  color: black;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
<div style="width:700px; margin:50 auto;">
<h1>Shopping Cart</h1>
<button onclick="window.location.href = 'https://web.njit.edu/~drs64/IT202/pageOne.php';">Main Page</button>


<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
div class="cart_div">
<a href="cart.php">
<img src="dath4nu4eLkjZDUwMPZlpnjTFD96urSnqLMr7LE2dzi8vPVgIRoIkimAAANdElEQVR4nO1aC1fbuBI2jlEUKbIkhEgrHgktXUoppVu2u/S2sHe7//8/3Rm97DjJNiFO95x7mMMhsWPLn+f5zdhF8SzP8izP8izP0qdQoY0xVvz$
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>
<?php
foreach ($_SESSION["shopping_cart"] as $product){
?>
td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>
  <?php
}else{
        echo "<h3>Your cart is empty!</h3>";
        }
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>



</div>
</body>
</html>
