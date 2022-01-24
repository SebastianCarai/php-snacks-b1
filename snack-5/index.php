<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="teachers">
        <?php for ($i=0; $i<count($db['teachers']); $i++){
            $this_teacher= $db['teachers'][$i] 
        ?>
            <div>
            <b>Teacher: </b> <?php echo $this_teacher['name'] . ' ' . $this_teacher['lastname']  ?>
            </div>
        <?php } ?>
    </div>

    <div class="pm">
        <?php for ($j=0; $j<count($db['pm']); $j++){
            $this_pm= $db['pm'][$j] 
        ?>
            <div>
            <b>PM: </b> <?php echo $this_pm['name'] . ' ' . $this_pm['lastname']  ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>

