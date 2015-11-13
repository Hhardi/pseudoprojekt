<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<button onclick="myFunction()">Tere maailm</button>
<script>
    function myFunction() {
        alert("Tere maailm");
    }
</script>
<a href="javascript:AlertIt();">Tere maailm</a>

<script type="text/javascript">
    function AlertIt() {
        var answer = confirm ("Tere maailm")
        if (answer)
            window.location="http://khk.ee";
    }
</script>

<a href="http://www.w3schools.com" onclick="navigeerimatu(); event.preventDefault();">Jääme siia</a>
<script>
    function navigeerimatu() {
        alert("Jääme siia");
    }
</script>
</body>
</html>