<!DOCTYPE html>
<html>
<head>
    <title>AJAX Navigation</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        a {
            margin: 15px;
            text-decoration: none;
            color: blue;
            cursor: pointer;
        }

        #content {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <h1>My Website</h1>

    <!-- Navigation Menu -->
    <nav>
        <a class="menu" data-page="home">Home</a>
        <a class="menu" data-page="about">About</a>
        <a class="menu" data-page="products">Products</a>
    </nav>

    <!-- Content will load here -->
    <div id="content">
        <h2>Welcome</h2>
        <p>Click any menu item.</p>
    </div>

    <script>
        $(document).ready(function() {

            $(".menu").click(function() {

                var page = $(this).data("page");

                $.ajax({
                    url: "content.php",
                    type: "GET",
                    data: { page: page },

                    success: function(response) {
                        $("#content").html(response);
                    }
                });

            });

        });
    </script>

</body>
</html>