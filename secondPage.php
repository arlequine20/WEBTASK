<?php
$name = "Junior";
$age = 30;
$email = "john@example.com";
$pizza_price=10.99;
$quantity=10;
$users=1000;
$gpa=3.5;
$tax_rate=0.07;

$total_price = $pizza_price * $quantity;
$total_with_tax_single = $pizza_price + ($pizza_price * $tax_rate);
$total_with_tax = $total_price + ($total_price * $tax_rate);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Output Interface</title>
</head>
<body>

<?php
echo "The total price of the order is $$total_price <br>";
echo "This is $name <br>";
echo "This is my $age year old <br>";
echo "hello $name <br>";
echo "I like pizza <br>";
echo "My email is $email <br>";
echo "My name is $name and I am $age years old. <br>";
echo "The price of the pizza is $$pizza_price <br>";
echo "You are $age years old and your email is $email <br>";
echo "There are $users users and the quantity is $quantity <br>";
echo "The total price is $$total_price <br>";
echo "You would like to order $quantity pizzas and the total price is $$total_price <br>";
echo "Your GPA is $gpa <br>";
echo "Your pizza is $$pizza_price <br>";
echo "The tax is 7% <br>";
echo "The total price with tax is $" . number_format($total_with_tax_single, 4) . "<br>";
echo "The total price for $quantity pizzas with tax is $" . number_format($total_with_tax, 3) . "<br>";
echo "Online status: Offline <br>";
echo "Employment status: Employed <br>";
echo "For sale: Yes <br>";
echo "You have ordered $quantity pizzas and the total price with tax is $" . number_format($total_with_tax, 3) . "<br>";
echo "You have ordered $quantity x pizzas <br>";
echo "Your total price with tax is $$total_price <br>";
?>

</body>
</html>