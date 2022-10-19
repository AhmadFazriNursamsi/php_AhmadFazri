<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <?php
        $servername = "localhost";
        $username = "fazriii";
        $password = "123456";
        $dbname = "soal2";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    
        // $sql = "SELECT hobi FROM hobi";
        $sql ="SELECT hobi.hobi, hobi.person_id, person.nama FROM hobi INNER JOIN person ON hobi.person_id=person.id;";

        $result = $conn->query($sql); 
        
        // $result3 = $conn->query($sql2); 
        
        $d = $result->fetch_assoc();
        // $count = mysqli_num_rows( $d );
        //  $d->rowCount();
        // var_dump($count, $d);
    ?>
    <title>Soal 2</title>
    </head>
    <body>
        <table align="center" border="1" cellpadding="0" cellspacing="0"> 
            <tr align="center"><td><h2> <b>SOAL A:  No 2</b></h2></td></tr>
            <tr> 
                <td>
                    <table width="550" class="table table-dark table-striped" align="center">
                    <tr>
                        <th>Hobi</th>
                        <th>Jumlah Person</th>
                    </tr>
                    <?php 
                  
                  // output data of each row
                  while($row = $result->fetch_assoc()) {  
                      ?>
                      <tr>
                          <td><?php echo $row['hobi'] ?></td>
                          <td><?php echo $row['person_id'] ?></td>
                </tr>
                <?php } ?>

                        
                        
                    </table>

                </td>
            </tr>
    </table>
</body>
</html>