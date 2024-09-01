<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goto statement</title>
    <style>
        /* Style for the code elements */
        code {
            background-color: #f4f4f4;
            padding: 10px;
            display: block;
            font-family: 'Courier New', Courier, monospace;
        }
        
        /* Style for the PHP code within the code elements */
        code span.php-code {
            color: #007bff; /* Blue color for PHP code */
        }
    </style>
</head>
<body>
  <h1>goto statement</h1> 
  <p>
  The goto statement
The goto statement is used to jump to another section of a program. It is sometimes referred to as an unconditional jump statement. The goto statement can be used to jump from anywhere to anywhere within a function.
  </p> 

  <code>
  Syntax:.<br>
statement_1;.<br>

if (expr).<br>
       goto label;.<br>
statement_2;.<br>
statement_3;.<br>

label: statement_4;.<br>
</code>
<code>
  <span class="php-code">
    <?php
    echo "test 1" . "<br>";
    echo "test 2" . "<br>";
    echo "test 3" . "<br>";
    goto abc;
    echo "test 4" . "<br>";
    echo "test 5" . "<br>";

    abc:echo "go to is here";
    

    ?>
  </span>
</code>
</body>
</html>
