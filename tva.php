<?php 
$result = "";
class calculator
{
    var $a;
    var $b;
    function getresult($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->a * $this->b;
       
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2']);
}
?>

<form method="post">
<table text-align="center">
    
    <tr>
        <td>Prix hors taxe</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>TVA</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

    <tr>
        <td><strong><?php echo "la somme est $result"; ?><strong></td>
    </tr>

</table>
</form>