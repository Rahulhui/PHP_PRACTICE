/* 
1.What is PHP?
1.1PHP is an acronym for "PHP: Hypertext Preprocessor"
1.2PHP is a widely-used, open source scripting language
1.3PHP scripts are executed on the server
1.4PHP is free to download and use

2.What is a PHP File?
2.1PHP files can contain text, HTML, CSS, JavaScript, and PHP code
2.2PHP code is executed on the server, and the result is returned to the browser as plain HTML
2.3PHP files have extension ".php"

3.What Can PHP Do?
3.1PHP can generate dynamic page content
3.2PHP can create, open, read, write, delete, and close files on the server
3.3PHP can collect form data
3.4PHP can send and receive cookies
3.5PHP can add, delete, modify data in your database
3.6PHP can be used to control user-access
3.7PHP can encrypt data



<?php
    
    function getStudentData($id){
        echo $id;
    }
    getStudentData(10);
?>


*/