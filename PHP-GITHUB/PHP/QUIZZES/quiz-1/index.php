<?php
$students=[
    ['name'=>'Mengyi','age'=>30,'status'=>'single'],
    ['name'=>"Nga",'age'=>18,'status'=>'single'],
    ['name'=>"Theavy",'age'=>19,'status'=> 'single'],
    ['name'=>'hak','age'=>20,'status'=>'unkown']
];

$numberOfSingles=0;
$indexYoungest =0;
foreach ($students as $index=>$student)
{
    // find number of single students 
    if($student['status']=='single'){
        $numberOfSingles+=1;
    }
    // find name students are sigle and age between 35 to 30;
    if(($student['status']=='single') and ($student['age']>=25 and $student['age']<=30 )){
    
        ECHO ($student['name']);

    }
    // find the youngest student
    if($students[$indexYoungest]['age']>$students[$index]['age']){
        $indexYoungest=$index;
    }
}
echo ($students[$indexYoungest]['name']);
