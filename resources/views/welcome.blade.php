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
        $arr[0] = "PHP"; 
        $arr[1] = "HTML"; 
        $arr[2] = "CSS";

        $arr[1] = "JAVASCRIPT";
        $arr[]  = "JQUERY";

        foreach($arr as $key => $value) { // при переборе: $key - индекс элемента массива, $value - значение элемента массива
            echo $value.'<br/>';
        }
        ?>
    </body>
</html>