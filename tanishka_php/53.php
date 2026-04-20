<!DOCTYPE html>
<html>
<head>
    <title>Prabhudeep Mega Mart - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: darkblue;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<h1>Welcome to Prabhudeep Mega Mart</h1>
<h2 style="text-align:center;">Hair Care & Beauty Products</h2>

<?php
// Multidimensional Associative Array
$products = array(
    "Hair Care" => array(
        array("name" => "Shampoo", "brand" => "Dove", "price" => 250),
        array("name" => "Hair Oil", "brand" => "Parachute", "price" => 180),
        array("name" => "Conditioner", "brand" => "Pantene", "price" => 300)
    ),
    "Beauty" => array(
        array("name" => "Face Wash", "brand" => "Garnier", "price" => 150),
        array("name" => "Lipstick", "brand" => "Lakme", "price" => 450),
        array("name" => "Face Cream", "brand" => "Ponds", "price" => 220)
    )
);

// Display Products
foreach($products as $category => $items)
{
    echo "<h3 style='text-align:center; color:darkgreen;'>$category</h3>";
    echo "<table>";
    echo "<tr>
            <th>Product Name</th>
            <th>Brand</th>
            <th>Price (₹)</th>
          </tr>";

    foreach($items as $item)
    {
        echo "<tr>";
        echo "<td>".$item['name']."</td>";
        echo "<td>".$item['brand']."</td>";
        echo "<td>".$item['price']."</td>";
        echo "</tr>";
    }

    echo "</table><br><br>";
}
?>

</body>
</html>