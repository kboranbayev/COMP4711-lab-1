<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        
        $students = array();
        
        // First Student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // Second Student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        
        // Third Student
        $third = new Student();
        $third->surname = "Boranbayev";
        $third->first_name = "Kuanysh";
        $third->add_email('home', 'boranbayev_k@gmail.com');
        $third->add_email('school', 'kboranbayev@bcit.ca');
        $third->add_grade(67);
        $third->add_grade(75);
        $third->add_grade(88);
        $third->add_grade(91);
        $third->add_grade(100);
        $students['a00978728'] = $third;
        
        ksort($students); // one of the many sort functions
        
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
