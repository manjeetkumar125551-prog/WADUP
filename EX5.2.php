<!DOCTYPE html>
<html>
<head>
    <title>XMLHttpRequest Callback</title>
</head>

<body>

    <h2>Retrieve Data from TXT File</h2>

    <button onclick="loadData()">Get Data</button>

    <p id="demo"></p>

    <script>

        function loadData() {

            var xhttp = new XMLHttpRequest();

            xhttp.onload = function() {

                if (xhttp.status == 200) {
                    myCallback(xhttp);
                }

            };

            xhttp.open("GET", "data5.2.txt", true);

            xhttp.send();

        }


        function myCallback(xhttp) {

            document.getElementById("demo").innerHTML =
            xhttp.responseText;

        }

    </script>

</body>
</html>

