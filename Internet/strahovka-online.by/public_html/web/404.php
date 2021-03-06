<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Страница не найдена</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        * {
            line-height: 1.2;
            margin: 0;
        }

        html {
            color: #888;
            display: table;
            font-family: sans-serif;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

        h1 {
            color: #555;
            font-size: 2em;
            font-weight: 400;
        }

        p {
            margin: 0 auto;
            width: 280px;
        }

        @media only screen and (max-width: 280px) {

            body, p {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }

        }

    </style>
</head>
<body>
    <h1>Страница Не Найдена</h1>
    <p>Извините, но страница, которую вы пытаетесь просмотреть, не существует.</p>
    <p>Вы будете перенаправлены на <strong><a href="/">Главную страницу</a></strong> через: <b><span id="time"></span></b> сек.</p>
    <script type="text/javascript">
        var i = 5;//время в сек.
        function time(){
            document.getElementById("time").innerHTML = i;//визуальный счетчик
            i--;//уменьшение счетчика
            if (i < 0) location.href = "http://strahovka-online.by";//редирект
        }
        time();
        setInterval(time, 1000);
    </script>

</body>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->