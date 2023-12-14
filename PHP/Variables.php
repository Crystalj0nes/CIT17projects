<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $int_var = 12345;
    print("$int_var");
    print("<br>");
    $another_int = -12345 + 12345;
    print("$another_int <br>");

    $many = 2.2888800;
    print("$many");
    print("<br>");
    $many_2 = 2.2111200;
    print("$many_2");
    print("<br>");
    $few = $many + $many_2;
    print("$many + $many_2 = $few<br>");

    if (TRUE)
        print("This will always print<br>");
    else
        print("This will never print<br>");

        $true_num = 3 + 0.14159;
        print("$true_num");
        print("<br>");
        $true_str = "Tried and true";
        print"$true_str";
        print("<br>");
        $true_array[49] = "An array element";
        print("$true_array[49]");
        print("<br>");
        $false_array = array();
        $false_null = NULL;
        print("$false_null");
        print("<br>");
        $false_num = 999 - 999;
        print"$false_num";
        print("<br>");
        $false_str = "";
        print"$false_str";
        print("<br>");  
        
        $my_var = NULL;
        print("$my_var");
        print("<br>");
        $my_var1 = null;
        print("$my_var1");


        $variable = "name";
        $literally = 'My $variable will not print!<br> ';
            print($literally);
    
        $literally = "My $variable will print!<br>";
            print($literally);
            print("<br>");


            $x = 4;
            function assignx () {
                $x = 0;
    print "\$x inside function is $x. ";
    print("<br>");
    }
    assignx();
    print "\$x outside of function is $x. ";

    function multiply ($value) {
        $value = $value * 10;
        return $value;
        }
        $retval = multiply (10);
        Print "Return value is $retval\n";

        $somevar = 15;
    function addit() {
    GLOBAL $somevar;
    $somevar++;
    print "Somevar is $somevar";
    }
    addit();

    function keep_track() {
        STATIC $count = 0;
        $count++;
        print $count;
        print " ";
    }
    keep_track();
    keep_track();
    keep_track();

     $channel =<<<_XML_
    <channel>
    <title>What's For Dinner<title>
    <link>http://menu.example.com/<link>
    <description>Choose what to eat tonight.</description>
    </channel>
    _XML_;
    echo <<<END
    This uses the "here document" syntax to output
    multiple lines with variable interpolation. Note
    that the here document terminator must appear on a
    line with just a semicolon. no extra whitespace!
    <br />
    END;
        print $channel;

     ?>
    
</body>
</html>
