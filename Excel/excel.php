<?php
require_once ('connection.php');
$sql = "SELECT * FROM user";
$result = mysqli_query($db, $sql);
$output ='<table>
<tr>
<th align = "center">Name</th>
<th align = "center">Age</th>
<th align = "center">Contact</th>
</tr>';
while ($excel = mysqli_fetch_assoc($result)) 
{
    $output.='<tr>
    <th align = "center">'.$excel['id'].'</th>
    <th align = "center">'.$excel['name'].'</th>
    <th align = "center">'.$excel['age'].'</th>
    <th align = "center">'.$excel['number'].'</th>
    </tr>';
}
$output.='</table>';
header('Content-Type:aplication/xls');
header('Content-Disposition:attachment;filename=excel.xls');
echo $output;
?>