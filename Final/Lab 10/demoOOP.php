<!DOCTYPE html>

<html>
    <head>
        
    </head>
    <body>
        <h1>OOP Demo in PHP</h1>

        <?php
            class Student{
                public $name;
                private $cgpa;
                public function __construct($name,$cgpa)
                {   
                    $this->name=$name;
                    $this->cgpa=$cgpa;
                }
                public function getCGPA(){
                    return $this->cgpa;
                }
                public function hasPassed(){
                    if($this->cgpa>=2.0){
                        return true;
                    }else{
                        return false;
                    }
                }
            }            
        ?>
        <div>Just some text before making the object</div>
        <?php
            $s1 = new Student("Bruce Wayne",3.99);
            echo "cgpa is ". $s1->getCGPA();
            echo "<br>name is ". $s1->name;

            if($s1->hasPassed()){
                echo "<br>The student has passed <br>";
            }else{
                echo "<br>The student has failed <br>";
            }

        ?>

        <?php
            require "carClass.php";
            $c1 = new Car(100);
            $c1->run();
            echo $check;
        ?>


    </body>
</html>