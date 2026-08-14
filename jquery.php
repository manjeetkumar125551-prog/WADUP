<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <h1>Welcome</h1>
    <p>This is a paragraph.</p>
    <button>Click Me</button>

    <script>
        $(document).ready(function() {
            $("h1, p, button").css("background-color", "blue");
        });
    </script>

</body>
</html>