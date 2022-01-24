<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
    $students_array = [
        [
            'name' => 'Paolo',
            'lastname' => 'Rossi',
            'grades' => [5,8,7,8,9]
        ],
        [
            'name' => 'Giorgio',
            'lastname' => 'Bianchi',
            'grades' => [6,5,7,4]
        ],
        [
            'name' => 'Arianna',
            'lastname' => 'Verdi',
            'grades' => [9,8]
        ]
    ];

    for ($i=0; $i<count($students_array); $i++){
        $single_student = $students_array[$i];
        $grades_sum = 0;
        for ($j=0; $j<count($single_student['grades']); $j++){
            $grades_sum +=  $single_student['grades'][$j];
        };
        $average_grade = $grades_sum / count($single_student['grades']);
    ?>
        <div>
            <?php echo $single_student['name'] . ' ' . $single_student['lastname']; ?> | Media voti: <?php echo $average_grade; ?>
        </div>
    <?php }; ?>