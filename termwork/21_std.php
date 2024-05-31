
<!DOCTYPE html>
<html>
    <head>
        <title>Student detail</title>
    </head>
<body>
    <form>
        Name: <input type="text" name="name"><br><br>
        Roll no. <input type="number" name="roll"><br><br>
        Course <input type="text" name="c"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_GET['submit']))
    {
        $name = $_GET['name'];
        $roll = $_GET['roll'];
        $c = $_GET['c'];
        echo"Student Name: $name<br>";
        echo"Class roll no.: $roll<br>";
        echo"Student course: $c";
    }
    ?>
</body>
</html>