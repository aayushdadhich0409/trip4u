<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tut</title>
</head>
<style>
    .container{
        max-width:80%;
        background-color:skyblue;
        margin:auto;
    }
    *{
        margin:10;
        padding:0;
        box-sizing:border-box;

    }
</style>

<body>
    <div class="container">
        <h1>lets learn about php</h1>
        <!-- this is a container 
     -->
        <p>your party status is here</p>
        <?php
        $age = 34;
        if($age>18){
            echo "you can go to party";
        }

        else{
           echo "you cant go to party"; 
        }

        $languages = array("cpp","python","java");
        echo $languages[0];
        echo count($languages);
        
        function print5(){
            echo "five";
        }
        print5();

        // strings 
        $str = "hii hero";
        $len = strlen($str);
        echo "<br>";
        echo "the length of str is";
        echo  $len;
        echo "<br>";
        echo "the word count is :". str_word_count($str);




        ?>
    </div>
</body>
</html>