<?php
$title="|Employee Details";
    require_once('common_files/header.php');
?>
<?php
    require_once('common_files/sidebar.php');
?>

<section class="empContainer">
<h2>Employee Details</h2>
    <div class="empWrapper">
      <table class="table">
        <thead >
            <th>Sl_no</th>
            <th>Emp_Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th></th>
        </tr>
        </thead>
  
        <?php
            require 'dbconn.php';
            $rows=mysqli_query($conn,"SELECT * FROM users_details");
            $i=1;
        ?>
      <tbody>
        <?php
        foreach($rows as $row) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["empid"]; ?></td>
                <td><?php echo $row["user_name"]; ?></td>
                <td><?php echo $row["user_email"]; ?></td>
                <td><?php echo $row["user_phone"]; ?></td>
                <td><?php echo $row["user_address"]; ?></td>
                <td><a href="editemp.php?id=<?php echo $row['user_Id'] ;?>"><img src="assets/img/edit-icon.svg" alt="Edit users icon" ></a>
               <button type="button" onclick="submitData(<?php echo $row['user_Id'] ;?>);"><img src="assets/img/delete-icon.svg" alt="Delete employee icon"></button>
                </td> 
            </tr>
        <?php }?> 
    </tbody>
    </table>
            <div  class="addusers"> 
                <a href="#" id="show-login"><img src="assets/img/adduser-icon.svg" alt="Add new Employee" style="width:20px;height:25px;" >New Employee</a>
            </div>
    </div>
</section>

<!-- popup -->

    <div class="popup">
      <div class="close-btn">&times ;</div>
      <form action="" method="post" class="regisform">
        <h2>New Registration</h2>

        <div class="form-element">
        <label for="empid">Emp ID </label>
          <input type="text" id="empid"  required />
        </div>

        <div class="form-element">
        <label for="name">Name </label>
          <input type="text" id="name" placeholder="John Smith" required />
        </div>

        <div class="form-element">
          <label for="email"> Email </label>
          <input type="email" id="email" placeholder="xyz@gmail.com" required/>
        </div>
<!--
        <div class="form-element">
          <label for="password"> Password </label>
          <input type="password" id="password" placeholder="Enter password" required/>
        </div>
        -->
        <div class="form-element">
        <label for="phone">Phone</label>
          <input type="tel" id="phone" placeholder="10-digit number" required/>
        </div>

        <div class="form-element">
        <label for="address">Address</label>
          <input type="textarea" id="address" placeholder="Address......." required />
        </div>
        <button type="submit" onclick="submitData('insert');">Submit</button>
        </form>
      </div>
    </div>


    <?php  require('js/callbacks/script.php');?>
    <script src="js/addusers.js"></script>
<?php
    require_once('common_files/footer.php');
?>

