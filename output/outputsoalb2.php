
<?php 
$jumcol = $_POST['jumlah'];
?>

<html>
  <table align="center" border="1" cellpadding="0" cellspacing="0"> 
    <tr align="center"><td><h2> <b>SOAL A:  No 1</b></h2></td></tr>
    <tr> 
      <td>
      <table border="0" cellpadding="0" cellspacing="10" align="center">
        <tr>
          <td></td>
          <td> </td>
          <?php 
          $n = 1;
            foreach($jumcol as $key => $val){
                echo '<center><h3> 1.'.$n++.': '.$val.'<br></h3>';

            }
        ?>
        </tr>
      </table>
      </td>
    </tr>
  </table>
</html>