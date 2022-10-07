<?php
$title='| Registration';
  require_once('common_files/header.php');
?>

      <section class="regisContainer">
      <h2>Registration Form</h2>
        <div class="regisWrapper">
        <form action="" method="post" class="myform">

        

        <div class="form-element">
        <div class="form-element">
        <label for="empid">Emp ID </label>
          <input type="text" id="empid" name="empid" required />
        </div>
        <label for="name">Name </label>
          <input type="text" id="name" name="name" placeholder="John Smith" required />
        </div>
      
        <div class="form-element">
          <label for="email"> Email </label>
          <input type="email" id="email" name="email" placeholder="xyz@gmail.com" required/>
        </div>

        <div class="form-element">
          <label for="password"> Password </label>
          <input type="password" id="password" name="password" placeholder="Enter password" required/>
        </div>
        <div class="form-element">
        <label for="role">Role</label>
          <input type="text" id="role" name="role" placeholder="Designation" required />
        </div>
        <div class="form-element">
        <label for="phone">Phone</label>
          <input type="tel" id="phone" placeholder="10-digit number" required/>
        </div>

        <div class="form-element">
        <label for="address">Address</label>
          <input type="textarea" id="address" placeholder="Address......." required />
        </div>
   

<?php
    include('dbconn.php');
    $empid=$_POST['empid'];
   $sql = "SELECT * FROM regis WHERE emp_Id=$empid;";
   $result = mysqli_query($conn,$sql);

    $rowcount = mysqli_num_rows($result);

    if($rowcount == 1) {
        $row = mysqli_fetch_assoc($result);
        echo "Yeah! User exists!!!";
  
    } else {

      echo "Yeah!Doesn't User exists!!!";
    }

?>
<?php
require('js/callbacks/script.php'); ?>
<button type="button" onclick="submitData('insert11');">Submit</button> 
       
        </form>
        </div>
        </section>
      
</body>
</html>