<?php

include_once "./lib/promptInput.php";


$answer = get_string("What's your name? ");
printf("hello, %s\n", $answer);


$myInt = get_int("Enter a number: ");

// $myChar = get_char("Enter a char: ");

// $myFloat = get_float("Enter a float: ");

print("myInt: " . $myInt);
print("\n\r");

for($i=0; $i<$myInt; $i++)
{
    for($j=0; $j<$myInt; $j++)
    {
        if($j < $myInt - $i - 1)
        {
            print(" ");
        }
        else{
            print("#");
        }
    }
    print("\n\r");
}
print("------------------- \n\r");

for($i=0; $i<$myInt; $i++)
{
    for($j=0; $j<=$i; $j++)
    {
        print("#");
    }
    print("\n\r");
}
// print("\n\r");


?>