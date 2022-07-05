<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>object_functions</title>
</head>
<body>
    <?php
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "true";
                }
                else{
                    return "false";
                }
            }
        }

        $student1 = new Student("Jim", "Computer Science",2.8);
        $student2 = new Student("Bob", "Business",3.8);
        echo $student1->name .  "Honors:" . $student1->hasHonors() . "<br>";
        echo $student2->name . "Honors:". $student2->hasHonors() . "<br>";
    ?>
</body>
</html>