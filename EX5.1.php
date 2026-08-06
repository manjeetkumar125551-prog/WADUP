<!DOCTYPE html>
<html>
<head>
    <title>XMLHttpRequest Example</title>
</head>
<body>

<h2>Load Text File with XMLHttpRequest</h2>
<button onclick="loadText()">Load Text</button>

<p id="output"></p>

<script>
function loadText() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && this.status === 200) { 
            document.getElementById("output").innerHTML = this.responseText;
        }
    };

    xhr.open("GET", "data.txt", true);
    xhr.send();
}
</script>

</body>
</html>