<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
    <h1>05_Constants</h1>
</head>
<body>
    <style>
        .dive{
            text-align: left;
            border: 2px solid black;
        }
        body ,h1 ,h3{
            text-align: center;
        }
    </style>
    <h3>Constant() function</h3>
    <p> define("MINSIZE", 50); <br>
        echo MINSIZE;<br>
        echo constant("MINSIZE"); // same thing as the previous line<br>
        <h5>Output:</h5>
        
        <?php
        define("MINSIZE", 50);
        echo MINSIZE;
        print("<br>");
        echo constant("MINSIZE"); // same thing as the previous line
        ?>
    </p>

    <h3>Valid Constant Names</h3>
    <p>
    // Valid constant names <br>
    define("ONE", "first thing");<br>
    define("TWO2", "second thing");<br>
    define("THREE_3", "third thing")<br>
    // Invalid constant names<br>
    define("2TWO", "second thing");<br>
    define("__THREE__", "third value");<br>
    <h5>Output:</h5>
    <?php
        // Valid constant names
    define("ONE", "first thing");
    print(constant("ONE"));
    print("<br>");
    define("TWO2", "second thing");
    print(constant("TWO2"));
    print("<br>");
    define("THREE_3", "third thing");
    print(constant("THREE_3"));
    // Invalid constant names
    define("2TWO", "second thing");
    define("__THREE__", "third value");
    ?>
    </p>

    <div class="dive">
    <h3>Magic Constant</h3>
    <ul >
        <li>
        __LINE__ - The current line number of the file.
        </li>
        <li>
        __FILE__ - The full path and filename of the file. If used inside an include, 
        the name of the included file is returned. Since PHP 4.0.2, __FILE__ always contains an absolute path whereas in older versions it contained relative path under some circumstances
        </li>
        <li>
        __FUNCTION__ - The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the function name as it was declared (case-sensitive). In PHP 4 its value is always lowercased.
        </li>
        <li>
        __CLASS__ - The class name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the class name as it was declared (case-sensitive). In PHP 4 its value is always lowercased. 
        </li>
        <li>
        __METHOD__ - The class method name. (Added in PHP 5.0.0) The method name is returned as it was declared (case-sensitive).
        </li>

    </ul>
    </div>
</body>
</html>

