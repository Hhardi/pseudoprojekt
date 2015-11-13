<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body id="go" >
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

<img id="kass" onclick="changeImage()" src="http://goo.gl/Q1670b" width="200" height="150">
<script>
    function changeImage() {
        var image = document.getElementById('kass');
        if (image.src.match("koer")) {
            image.src = "http://goo.gl/Q1670b";
        } else {
            image.src = "http://goo.gl/j8IQ8c";
        }
    }
</script>

<button id="red">Red</button>
<button id="blue">Blue</button>
<button id="green">Green</button>
<script>

    $("#red").click(function(){
        $("#go").css("background-color","red");
    });
    $("#blue").click(function(){
        $("#go").css("background-color","blue");
    });
    $("#green").click(function(){
        $("#go").css("background-color","green");
    });
</script>

<button id="paremklops">Luba paremklõps</button>
<script>

    $(document).contextmenu( function() {
        return false;
    });

    $('#paremklops').click(function(){
        $(document).unbind();
    });
</script>
<button>Kassipilt</button>
<script>
    $(document).ready(function() {
        $("button").click(function () {
            $("img").toggle();
        });
    });
</script>


</body>
</html>