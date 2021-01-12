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

//better solutions 

/*
for(let i=1; i<=num; i++){
    let line="";
    for(let j=num; j>=1; j--){
        line += j>i ? " " : "#";
    }
    console.log(line);
}
for(let i=0; i<num; i++){
    let line="";
    for(let j=0; j<=i; j++){
        line += "#";
    }
    console.log(line);
}
*/

?>
