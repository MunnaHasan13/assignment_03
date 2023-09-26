<?php

$studentGrades = array(
array('Math'=>80,'English'=>75,'Science'=>85),
array('Math'=>68,'English'=>80,'Science'=>78),
array('Math'=>90,'English'=>70,'Science'=>82)
);

function average ($studentGrades) {

    foreach($studentGrades as $student) {

        $averageGrade = array_sum($student) /count($student);
        echo "Average grade is: ". $averageGrade."\n";

    }
}
average($studentGrades);