<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Project</title>
    </head>
    <body>
        Тут я буду писать код PHP <br>

        <?php 
        $main = "Andrey";
        if ($main === "Andrey")
            echo "Добро пожаловать $main"
        ?>
    </body>
</html>