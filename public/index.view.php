<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <ul>
            <?php 
                foreach($tasks as $task){
                if($task->status):  
            ?>
                <strike><li><?= $task->description ?></li> </strike>
            <?php
                else : 
            ?>
                <li><?= $task->description ?></li>
            <?php  
                endif;
            }
            ?>
        </ul>
</body>
</html>