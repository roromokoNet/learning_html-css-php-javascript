# learning_html-css-php-javascript

1.  I first learning to HTML and CSS for I make web saite design.
    1.  Name of each department for HTML and CSS.(2016/09/27)
    2. Basic sentences of HTML and CSS.(2016/09/28)  
    [sample](https://roromokonet.github.io/learning_html-css-php-javascript/2016:09:28/sample.html)
    3. ?
2.  ?

# 2016/09/26

## Name of each department for HTML and CSS.

|  |  |
|---|---|
| HMTL | ```<element="value">Text</element>```|
| CSS | ```selector{property:value;}``` |

# 2016/09/28

## Basic sentences of HTML.

````HTML:model
<!DOCTYPE html>
<!-- Initial Configuration to "en"(english) -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
<body>
    <!-- contents -->
</body>
</html>
````

## Add of basic layout.

````HTML:Basic_layout
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
<body>
    <header class="header">
    </header>
    <div class="wrapper">
        <main class="main">
        </main>
        <div class="sidemenu">
        </div>
    </div>
    <footer class="footer">
    </footer>
</body>
</html>
````

## writing of CSS.

````CSS
.header {
    width: 100%;
}
.wrapper {
    width: 970px;
    margin: 30px auto 40px;
}
.main {
    display: block;
    float: left;
    width: 600px;
}
.sidemenu {
    float: right;
    width: 275px;
}
.footer {
    width: 100%;
}
````

## clearfix:this is layout technique.

### Add of HTML.
````html
...
    <div class="wrapper clearfix">
        <main class="main">
        </main>
        <div class="sidemenu">
        </div>
    </div>
...
````

### Add of CSS.
````CSS
.clearfix::after {
    content: '';
    display: block;
    clear: both;
}
````
### Code of confirmation for layout.

````CSS
.header, .main, .sidemenu, .footer {
    border: 1px solid #aaa;
    background-color: #ccc;
}
.header, .footer {
    height: 100px;
}
.main, .sidemenu {
    height: 500px;
}
````

# 2016/09/30

# Introduction to PHP

## Base code
````HTML
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
<body>
    <!-- contents -->
</body>
</html>
````

##  Add PHP code.

````HTML
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
<body>
    <?php
    //php code
    ?>
</body>
</html>
````

## 	Variable declaration

````PHP
$ Variable name = value;
//e.g.
$text = "sample";
$text = 'sample';
````


## Character output

### Print
````PHP
<?php
    $text = 'PHP';
    print("{$text} Code");
    print($text.' Code');
   
   print '<br />';
        
    print "{$text} Code";
    print $text.' Code' ;
    print $text;
?>
````
### Result
````
PHP CodePHP Code
PHP CodePHP CodePHP
````
### echo
````PHP
<?php
    $text = 'PHP';
    echo("{$text} Code");
    echo($text.' Code');

    echo '<br />';
        
    echo "{$text} Code";
    echo $text.' Code';
    echo $text;
?>
````
### Result
````
PHP CodePHP Code
PHP CodePHP CodePHP
````

## The difference between double quotes and single quotes

````PHP
<?php
    $text = 'PHP';
    print("{$text}");//work correctly(PHP Version 7.0.0)
    print(’{$text}’);//not work correctly(PHP Version 7.0.0)
?>
````
### Result
````
PHP 
{$text}
````

# 2016/10/03

# PHP Operators

## Arithmetic Operators
|Operators|Name|Example($a=5,$b=5)|Result|
|:-:|:-:|:-:|:-:|
|+|Addition|$a + $b|10|
|-|Subtraction|$a - $b|0|
|*|Multiplication|$a * $b|25|
|/|Dicision|$a / $b|1|
|%|Modulus|$a % $b|0|
|**|Exponentiation|$a ** $b|3125|

# 2016/10/07

# POST, etc.

## POST 

### sample_send.php
```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>sampel_send</title>
</head>
<body>
<form method="POST" action="sample_reception.php">
    <div id="container">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" />
    </div>
    <input type="submit" value="Send" />
</form>
</body>
</html>
````
### sample_reception.php

````php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>sample_reception</title>
</head>
<body>
Hello! 
<?php
print htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
print "</br>";
var_dump($_POST);
?>
</body>
</html>
````
if don't use "htmlspecialchars" , when sending a script , it would have been executed.

### sample

````html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>sampel_send</title>
</head>
<body>
<form method="POST" action="sample_reception.php">
    <div id="container">
        <label for="name">First name</label>
        <input type="text" id="name" name="name" />
         <label for="name">Last name</label>
        <input type="text" id="name1" name="name1" />
    </div>
    <input type="submit" value="Send" />
</form>
</body>
</html>
````
````php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>sample_reception</title>
</head>
<body>
Hello! 

<?php
//print htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
print "</br>First name:";
print $_POST['name'];
print "</br>Last name:";
print $_POST['name1'];
?>

</body>
</html>
````
![1](2016:10:07/1.png)  
![1](2016:10:07/2.png)  
![1](2016:10:07/3.png)  
![1](2016:10:07/4.png)  

