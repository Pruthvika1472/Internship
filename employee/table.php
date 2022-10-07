<?php
    include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    
    <table id="myTable">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </thead>
        <tbody>

        <?php
            $sql = "SELECT * FROM users_details;";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            foreach($rows as $row) {
        ?>
            <tr>
                <td><?php echo $row['user_name'];?></td>
                <td><?php echo $row['user_email'];?></td>
                <td><?php echo $row['user_phone'];?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <?php
        
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</html>