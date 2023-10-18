<!doctype html>
<html lang="en">
<head>
    <?php include('header.php');
    include_once('connect.php');
    ?>
    <link rel="stylesheet" href="CSS/product.css">
</head>
<body>
<div class="container">
    <h1>Product List</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php

        // Query to retrieve product data
        $query = "SELECT * FROM product";
        $result = $db->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>$" . $row["price"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No products found</td></tr>";
        }

        // Close the database connection
        $db->close();
        ?>
        </tbody>
    </table>
</div>

<?php






















?>
<?php
include('footer.php');
?>
