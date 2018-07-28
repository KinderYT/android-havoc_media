<?php 
require "conn.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);//Si da TRUE hay un usuario
if(mysqli_num_rows($result) > 0) {//Si es mayor a cero significa que se selcciono mas de una tabla
echo "login success !!!!! Welcome user";
}
else {
echo "login not success";
}
?>
