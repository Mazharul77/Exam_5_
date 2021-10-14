<?php
echo "<h1>..........Problem3: Sum of any 2 Numbers Summation Max's Didigts :............</h1><br>";

$numbers = array(4,3,7,1,2);

$num_length = count($numbers);
$append_array1 = array();
$append_array2 = array();

$append_array3 = array();
$append_array4 = array();

// 
$new_append_array1 = array();
$new_append_array2 = array();

$new_append_array3 = array();
$new_append_array4 = array();

$new_append_merged = array();




echo "The Given Original Numbers_Array:";

for($i=0; $i<$num_length; $i++)
{
    echo "<span> $numbers[$i] </span>";
}
echo "<br> The Length of numbers: $num_length <br>";


// echo "<br>The Numbers as Ascending Order:";

// for($i=0; $i<$num_length; $i++)
// {

//     for($j=$i+1; $j<$num_length; $j++)

//     {
//         if($numbers[$i]> $numbers[$j])
//         {
//             $local_num = $numbers[$i];
//             $numbers[$i] = $numbers[$j];
//             $numbers[$j] = $local_num;
//         }
//     }  
// }

// for ($p=0; $p<$num_length; $p++)
// {
//     echo " $numbers[$p] ";
// }

// $max_2 = $num_length-2;
// $max_num  = intval($numbers[$num_length-1]) + intval($numbers[($max_2)]);
// echo "<br> The Max: ".$max_num;




// appending 2 sums:......................
$c1=0;
$c2=0;
$c3=0;
$c4=0;
for($i=0; $i<=$num_length-2; $i++)
{
      for($j=$i+1; $j<=$num_length-1; $j++)
        {
            if($i==0)
            {
                $n1 = $numbers[$i] + $numbers[$j]; 
                array_push($append_array1, $n1);
            }

            for($k = $i+1; $k <= $num_length-1; $k++)
            {
                if($i==1)
                    {
                        $n2 = $numbers[$i] + $numbers[$k]; 
                        array_push($append_array2, $n2);
                    }
                    
                    for($l = $i+1; $l <= $num_length-1; $l++)
                    {
                        if($i==2)
                        {
                            $n3 = $numbers[$i] + $numbers[$l]; 
                            array_push($append_array3, $n3);
                        }
                        
                        for($m = $i+1; $m <= $num_length-1; $m++)
                        {
                            if($i==3)
                            {
                                $n4 = $numbers[$i] + $numbers[$m]; 
                                array_push($append_array4, $n4);
                            }

                        }
                        

                    }

            }

            
        }

}


//Sum append print
echo "<br>The appended1: ";
for($i=0; $i<=$num_length-2; $i++)
{
    $new_append_array1[$i] = $append_array1[$i];
    echo "$new_append_array1[$i] ";

}



echo "<br>The appended2: ";
for($i=0; $i<=$num_length-3; $i++)
{
    $new_append_array2[$i] = $append_array2[$i];
    echo "$new_append_array2[$i] ";

}



echo " <br> The appended3: ";
for($i=0; $i<=$num_length-4; $i++)
{
    $new_append_array3[$i] = $append_array3[$i];
    echo "$new_append_array3[$i] ";
}

echo " <br> The appended4: ";
for($i=0; $i<=$num_length-5; $i++)
{
    $new_append_array4[$i] = $append_array4[$i];
    echo "$new_append_array4[$i] ";
}


$append_merged = array_merge($new_append_array1, $new_append_array2,$new_append_array3,$new_append_array4);



// print_r("Merged All Appended Array: $append_merged");
// var_dump($append_merged) ;
$digit_append =array();

echo "<br/>The Merged Array of All invidual appended Sum of random pairs:";
foreach($append_merged as $sum_pair)
 {
     print_r($sum_pair." " );
     $sum=0; $rem=0;  

     for ($i =0; $i<=strlen($sum_pair);$i++)  
     {  
        $rem=$sum_pair%10;  
        $sum = $sum + $rem;  
        $sum_pair=$sum_pair/10;  
     } 
    array_push($digit_append , $sum);
 }

//  Max of random pair's summation:

echo "<h2>Max of random pair's summation from given Numeric Array:".max($append_merged). "</h2>";



echo "<h2>Now Max_Sum_Value of each sum_pair's Digits is:".max($digit_append). "</h2>";






?>