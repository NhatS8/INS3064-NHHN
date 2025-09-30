<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Test</title>
</head>
<body>
    <?php
        $name = "Jane Doe";
        $age = 30;
        $courses = array("Java", "C", "PHP");

        echo "Name: $name, Age: $age";
        echo "<br/>3rd course is: " . $courses[2];
    ?>
    <?php
        $x = 10;
        $y = 11;

        echo "x: " . $x . "<br/>";
        echo "y: " . $y . "<br/>";
        echo "x/y: " . ($x/$y) . "<br/>";
        echo "x%y: " . ($x%$y) . "<br/>";
        echo "x++: " . ($x++) . "<br/>";
        echo "++y: " . (++$y) . "<br/>";

        echo "x==y: " . ($x==$y) . "<br/>";
        echo "x!=y: " . ($x!=$y) . "<br/>";
        echo "x>y: " . ($x>$y) . "<br/>";
        echo "x<y: " . ($x<$y) . "<br/>";
        echo "x>=y: " . ($x>=$y) . "<br/>"; 
        echo "x<=y: " . ($x<=$y) . "<br/>";
    ?>
    <?php
    $x = $_GET["x"];
    $y = $_GET["y"];
    echo "x + y = " . ($x + $y) . "<br/>";
    echo "x == y = " . ($x == $y) . "<br/>";
    ?>
    <table border="1">
        <?php
            for ($i=1; $i<=5; $i++) {
                echo "
                <tr>
                    <td> $i </td>
                </tr>
                ";
            }
        ?>
</body>
</html>
