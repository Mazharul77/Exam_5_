<?php
echo "<h1>..........Problem3: Sum of any 2 Numbers Summation Max's Didigts :............</h1><br>";

$numbers = array(4,3,7,1,2);

$num_length = count($numbers);
$append_array1 = array();
$append_array2 = array();

$append_array3 = array();
$append_array4 = array();


echo "The Length of numbers: $num_length <br>";

echo "The Given Original Numbers_Array:";

for($i=0; $i<$num_length; $i++)
{
    echo "<span> $numbers[$i] </span>";
}

echo "<br>The Numbers as Ascending Order:";

for($i=0; $i<$num_length; $i++)
{

    for($j=$i+1; $j<$num_length; $j++)

    {
        if($numbers[$i]> $numbers[$j])
        {
            $local_num = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $local_num;
        }
    }  
}

for ($p=0; $p<$num_length; $p++)
{
    echo " $numbers[$p] ";
}

$max_2 = $num_length-1;
$max_num  = intval($numbers[$num_length]) + intval($numbers[($num_length-1)]);






// for($i=0; $i<$num_length-1; $i++)
// {
//       for($j=$i+1; $j<$num_length; $j++)
//         {
//             if($i==0)
//             {
//                 $n1 = $numbers[$i] + $numbers[$j]; 
//                 array_push($append_array1, $n1);
//             }
//         }

// }


// //Sum append print
// echo "<br>The appended1: ";
// for($i=0; $i<$num_length; $i++)
// {
//     echo "$append_array1[$i] ";
// }


// echo "The appended2: <br>";
// for($i=0; $i<$num_length; $i++)
// {
//     echo "$append_array2[$i] ";
// }



?>