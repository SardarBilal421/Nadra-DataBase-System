<?php

$RegisteratiionNo = array(
    1=>"Bilal",
    2=>"Amad",
    3=>"Ahad",
    4=>"Ahsan",
    5=>"Hamza",
    6=>"Husnain",
    7=>"Zarrar",
    8=>"Meshab",
    9=>"John",
    10=>"Wick",
    11=>"Sardar",
    12=>"Imran",
    13=>"Ali",
    14=>"Asjad",
    15=>"Usman"
);

for ($x = 0; $x < 15; $x++) {
$m=$x/2;
    if(m==0){
       unset($RegisteratiionNo[$x]);
    }
}
$a = readline('Enter a Value: ');
for ($x = 0; $x < 7; $x++) {
    if($a==$RegisteratiionNo[$x]){
        echo $RegisteratiionNo[$x];
    }else{
        echo "Value Not Found";
    }
}