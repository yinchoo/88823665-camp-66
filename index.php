<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP test</title>
    </head>
    <body>
        <h1>File index.php</h1>
        <?php
        echo "hello world";
        echo "<br>";
        print("hello");
        echo "<br>";
        print_r("hello");
        echo "<br>";
        print("hello");
        echo "<br>";
        var_dump("hello");
        echo "<br>";
        $myvar = "hello world";
        ?>
        <h1><?php echo $myvar; ?></h1>
        <?php
        echo "<h1>" .$myvar."</h1>";
        ?>
        <?php 
        $x = 1;
        function myfunction($myparam) {
            global $x;
            $x = "Hello";
            return $myparam;
        }
        echo "<p>" .MYFUNCTION("hello world!"). "</p>";
        ?>
        <h1> <?php echo $x; ?> </h1>
        <?php echo 1 + 1; ?>
        <?php echo "1" + '1'; ?>
        <?php 
        $mychar = "a";
        ?>
        <h1> <?php echo ++$mychar; ?> </h1>
        <?php 
        if(1 === '1') {
            echo "1 == \"1\"";
        } else if (true) {
            echo "1 != \"1\"";
        }
        if (true)
        echo "true";
        if (true)
        echo "false";

        $my_arr = array(1,2,3,4,5);
        for($i = 0; $i < count($my_arr);$i++) {
            echo $my_arr[$i];
        }
        echo "<br>";
        foreach($my_arr as $index => $value) {
            echo $value;
        }
        echo "<br>";
        $my_arr2[] = [0 => 1,2,3];
        $my_arr2[] = 2;
        $my_arr2[] = 3;
        $my_arr2[] = 4;
        $my_arr2[] = 5;
        print_r($my_arr2);
        echo "<br>";
        $my_arr3 = array(1,2,3,"myindex" => 4, 0 => 9);
        $my_arr3["myindex"] = 1;
        print_r($my_arr3);
        foreach($my_arr as $value) {
            echo $value;
        }
        
        ?>

    </body>
</html>