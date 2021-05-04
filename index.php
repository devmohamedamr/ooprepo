<?php

require "calculate.php";

if(isset($_POST['x'])){
    $calc1 = new calculate($_POST['x'],$_POST['y'],$_POST['op']);

}




?>


<form action="index.php" method="post">
<input name="x" >
<input name="y" >
<select name="op">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>

</select>    
<input  type="submit" >
</form>
