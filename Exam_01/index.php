<html>
    <body>
        <form action="index.php" method="get">
            Input String: <input type="text" name="input">
            <br>
            <input type="submit">
            <br>
        </form>
        <br>
        <?php
        //PHP code to check for Palindrome string in PHP.
        function Palindrome($string){
            $input = $string; //getting the string from input.
            $nospc = str_replace(' ', '', $input); //removes spaces.
            if (strrev($nospc) == $nospc){ //using strrev to reverse the string and checks if the condition is equals to a input string.
                echo "$input is a palindrome.";
            }
            else{
                echo "$input is not a palindrome."; 
            }
        }
        if (!empty($_GET["input"])){ //checks if the condition is not empty
            $string = $_GET["input"]; //declares variable string.
            Palindrome($string); // calls the Palindrome function
        }
        else{
            echo "Input a String.";
        }
        ?>
    </body>
</html>