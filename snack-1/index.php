<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite -->

<?php 
    $matches_array = [
        [
            'homeTeam' => 'Milano',
            'awayTeam' => 'Cantù',
            'homeTeamPoints' => 80,
            'awayTeamPoints' => 68
        ],
        [
            'homeTeam' => 'Sassari',
            'awayTeam' => 'Foggia',
            'homeTeamPoints' => 70,
            'awayTeamPoints' => 76
        ],
        [
            'homeTeam' => 'Reggio Emilia',
            'awayTeam' => 'Venezia',
            'homeTeamPoints' => 82,
            'awayTeamPoints' => 71
        ]
    ];
?>
<?php for ($i=0; $i<count($matches_array); $i++) { ?>
    <div> 
        <?php echo $matches_array[$i][homeTeam] ?> - <?php echo $matches_array[$i][awayTeam] ?> | 
        <?php echo $matches_array[$i][homeTeamPoints] ?> - <?php echo $matches_array[$i][awayTeamPoints] ?>
    </div>
<?php } ?>
