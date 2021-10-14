<?php
echo "<h1>..........Problem1: String Palindrome Checking:............</h1><br>";
?>

<form method=POST action=''>
<input type=text name=string1 class='form-control' value='' >
<input type=submit value=' String Palindrome Cheking...... '>
</form>


<?Php
if(isset($_POST['string1']))
{
    $string1 = $_POST['string1']; 



function f1_revStringCheeck($string1, $str2)
{
    $string1_length = strlen($string1);
    for($i=$string1_length-1;$i>=0;$i--)
    {
        $str2 .=$string1[$i];
    }
        

    if( strlen($string1) >0 )
    {

    if(strtolower($string1)==strtolower($str2))
    {
        return 1;
    }
    
    else
    {
        return 0; 
    }
}
else{
    echo "<h2>Please enter any string:</h2>";
 }  
    

}


//Now Calling Problem1(function to return)
$str2='';
if(f1_revStringCheeck($string1, $str2)){
    echo "<h2>True ($string1 is Palindrome).</h2>";
}
else{
    echo "<h2>False ($string1 is Not Palindrome).</h2>";

}

}



?>