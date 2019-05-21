<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </script>


</head>

<body>
<h1>Привет, МЕДВЕД!!) </h1>

    <div id = "23">
    </div>      

    <?php /*
        $config = array (
            "token" => "3ddd617e-7361-4ab4-b5c5-0fde95d179d0",
        );

        $url = "https://api.rasp.yandex.net/v3.0/search/?apikey=3ddd617e-7361-4ab4-b5c5-0fde95d179d0&format=json&from=c146&to=c213&lang=ru_RU&page=1&date=2015-09-02"
        $jsonResult = file_get_contents($url);
        $jsonResult = json_decode($content);
        */
    ?>

    <button id="myActionButton">Выполнить</button>
    <script>
    $('#myActionButton').click(function() {
        var andrew = $("#23");
        /*
        $.post(
            "TT.php"
        ); 
        */
        andrew.load("TT.php");
        alert('A KTO TAKIE MUSORA');
    });
    </script>

</body>

</html>