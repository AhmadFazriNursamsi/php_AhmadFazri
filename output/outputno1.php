
<?php 
$jumcol = $_POST['jumcol'];
?>

<html>
 <form method="POST" name="frmpost2" action="outputsoalb2.php">
  <table align="center" border="1" cellpadding="0" cellspacing="0"> 
    <tr align="center"><td><h2> <b>SOAL A:  No 1</b></h2></td></tr>
    <tr> 
      <td>
      <table border="0" cellpadding="0" cellspacing="10" align="center">
        <tr>
          <td></td>
          <td> </td>
            <?php 
                $num = $jumcol;
                for ($j = 1; $j<= $num; $j++)
                {
                    echo '<td> 1:'.$j.'<input type="text" name="jumlah[]" size="10" style="margin-right: 10px;"/> </td>';
                }
            ?>
        </tr>
        <tr>
          <td   colspan="4" align="center"><button type="submit">Submit </button></td>
        </tr>
      </table>
      </td>
    </tr>
  </table>
</form>
</html>