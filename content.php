<?php

$page = $_GET['page'];

if ($page == "home") {

    echo "<h2>Home Page</h2>";
    echo "<p>Welcome to our website.</p>";

}
else if ($page == "about") {

    echo "<h2>About Us</h2>";
    echo "<p>This is our about page.</p>";

}
else if ($page == "products") {

    echo "<h2>Products</h2>";
    echo "<p>Product 1 - Laptop</p>";
    echo "<p>Product 2 - Mobile</p>";

}
else {

    echo "<p>Page not found.</p>";

}

?>