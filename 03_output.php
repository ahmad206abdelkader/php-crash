<?php 
$age = 20;

if($age >= 18){
    echo 'you are old enuogh to vote';
}
else {
    echo 'sorry, you are not old enough to vote ';

}

$t = date("H");

if($t <12 ){
    echo 'good mornong';
}else{
    echo 'good evening ';
}

switch($favcolor = 'red'){
    case 'red' :
        echo 'your favorate color is red';
        break;
        case 'blue':
          echo  'your favorate color os blue';
            break;
            case 'green':
              echo  'your favorate color is green';
              break;
              
}



