<!--calculator 3 with switch case example-->

<form method="post">
<table border="2">
<tr>
<th>Enter Number:1</th>
<td><input type="number" name="txtnum1"></td>
</tr>


<tr>
<th>Calculation :</th>
<td><select name="sel">
<option>select operator</option>
<option  name="btn_add" value="+" align="center">+</option>
<option name="btn_sub" value="-" align="center">-</option>
<option name="btn_mul" value="*" align="center">*</option>
<option name="btn_div" value="/" align="center">/</option>

</select></td>
</tr>


<tr>
<th>Enter Number:2</th>
<td><input type="number" name="txtnum2"></td>
</tr>




<tr>
<th colspan="2"><input type="submit" name="btn_sub" value="calculate"></th>
</tr>
</table>
</form>

<?php

	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$grade=$_POST['sel'];
	
switch($grade){
	case"+";
	echo"$num1 +$num2=".($num1+$num2);
	break;
	
	case"-";
	echo"$num1-$num2=".($num1-$num2);
	break;
	
	case"*";
	echo"$num1*$num2=".($num1*$num2);
	break;
	
	case"/";
	echo"$num1/$num2=".($num1/$num2);
	break;
	
	default;
	echo"Select oprator";

}

?>