<?php
echo "<h1>..........Problem2: Middle Sub-String Squence Matching:............</h1><br>";
?>

<form method=POST action=''>
<input type=text name=Original_string class='form-control' value='' >
<input type=submit value='  Sub_Squence Matching...... '>
</form>



<?Php
if(isset($_POST['Original_string']))
{
    $Original_string = $_POST['Original_string']; 



    // Now Operations.............

function sequenceCheck($Original_string, $str1, $str2)
{
    
    $Original_string_length = strlen($Original_string);
    echo "<h2> Length of The Input String): $Original_string_length</h2> <br>";

    $res = $Original_string_length/2;
    echo "<h2>Divided Size of REs: $res </h2> <br>";
    

    $res_even = $res;
    $res_even_manual = intval($res_even);

    if($res_even != $res_even_manual)
    {
        $forward = 1;

        for($i=0; $i<$res_even_manual; $i++)
        {
            $str1 .= $Original_string[$i];

        }

        for($j = ($i+$forward); $j<$Original_string_length; $j++ )
        {
            $str2 .=$Original_string[$j];

        }

        echo "<br> <h4> Str1 : $str1 </h4> ";
        echo "<h4> Str2 : $str2 </h4> <br> ";

        if($str1 == $str2)
        {
            echo "<h1> True ($str1 and $str2 are matched sequence) </h1>";
        }

        else{
            echo "<h1> False ($str1 and $str2 are Not matched sequence). </h1>";

        }


        // echo "<br> res_even_manual (Integer Casted) : $res_even_manual ";

        return 1;
    }


    else{
        for($p=0; $p<$res_even_manual; $p++)
        {
            $str1 .= $Original_string[$p];

        }

        for($q = $p; $q<=$Original_string_length; $q++)
        {
            $str2 .= $Original_string[$q];

        }

        echo "<br><h4> Str1 : $str1 </h4><br>";
        echo "<br> <h4> </h4>Str2 : $str2 </h4> <br> ";
        

        if($str1 == $str2)
        {
            echo "<h1>True ($str1 and $str2 are middle matched sequence) </h1>";
        }

        else{
            echo "<h1> False ($str1 and $str2 are Not Middle divided matched sequence). </h1>";

        }
        return 0;
    }
    
}


//Now Calling Problem1(function to return)

$str1='';
$str2='';
if(sequenceCheck($Original_string, $str1, $str2)){

    echo "<h1>.............. So, Middle divided  strings are Not matched sequence).............. </h1>";


}
else{

    echo "<h1>.............. So, Middle divided  strings are matched sequence).............. </h1>";


}

}







?>