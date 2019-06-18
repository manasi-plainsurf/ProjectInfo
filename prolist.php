<center><table  border="1">
        <th>Projectname</th>
        <th>TeamName</th>
        <th>TeamSize</th>
        <th>StartDate</th>
        <th>EndDate</th>
        <th>Staus</th>
       <!-- <th>Action</th> -->
        
        

        <?php
        $conn = mysqli_connect("localhost", "root", "123", "project");
        if ($conn->connect_error) {
            die("Connection failed" . $conn->connect_error);
        }

        $sql = "SELECT Projectname,TeamName,TeamSize,StartDate,EndDate,Status FROM info";
        $result = $conn->query($sql);
      
            while ($row = $result->fetch_assoc()) {
                    ?>
        <tr>
              <td><?php echo $row['Projectname'] ?></td>
            <td><?php echo $row['TeamName'] ?></td>
            <td><?php echo $row['TeamSize'] ?></td>
            <td><?php echo $row['StartDate'] ?></td>
            <td><?php echo $row['EndDate'] ?></td>
            <td><?php echo $row['Status'] ?></td>
       <!--     <td><button class="btn btn-danger btn-sm remove">Delete</button></td> -->
            
            
        </tr>
        
        <?php } ?>
    </table></center>


